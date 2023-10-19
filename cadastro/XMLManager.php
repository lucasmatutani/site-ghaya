<?php
class XMLManager
{
    private $xml;
    private $listingsNode;
    private $uploadsDir = '../includes/uploads/';
    private $listingsFile = 'listings.xml';

    public function __construct($headerInfo = null , $xmlString = null)
    {
        if (file_exists($this->uploadsDir . $this->listingsFile)) {
            $this->xml = simplexml_load_file($this->uploadsDir . $this->listingsFile);
            $this->getListingsNode();
        } else {
            $this->xml = new SimpleXMLElement($xmlString);
            $this->addHeader($headerInfo);
            $this->listingsNode = $this->xml->ListingDataFeed->addChild('Listings');
        }
    }

    private function getListingsNode()
    {
        $this->listingsNode = isset($this->xml->ListingDataFeed->Listings) ? $this->xml->ListingDataFeed->Listings : $this->xml->ListingDataFeed->addChild('Listings');
    }

    private function addHeader($headerInfo)
    {
        $header = $this->xml->ListingDataFeed->addChild('Header');
        foreach ($headerInfo as $key => $value) {
            $header->addChild($key, $value);
        }
    }

    public function addListing($listingData)
    {
        // $listings = $this->xml->Listings;

        // if (!isset($listings)) {
        //     $this->listingsNode = $this->xml->addChild('Listings');
        // } else {
        //     $this->listingsNode = $this->xml->Listings;
        // }

        $newListing = $this->listingsNode->addChild('Listing');

        $newListing->addChild('ListingID', $listingData['codigo_interno']);
        $titleNode = dom_import_simplexml($newListing->addChild('Title'));
        $titleNode->appendChild($titleNode->ownerDocument->createCDATASection($listingData['titulo']));
        $newListing->addChild('TransactionType', $listingData['negocio']);
        $newListing->addChild('PublicationType', $listingData['tipo_anuncio']);

        $medias = $newListing->addChild('Media');
        foreach ($listingData['images'] as $media) {
            $item = $medias->addChild('Item', $media['path']);
            $item->addAttribute('medium', 'image');
            if($media['destaque'] == 1){
                $item->addAttribute('primary', 'true');
            }
            // $item->addAttribute('', 'seu_valor');
        }

        $details = $newListing->addChild('Details');
        if (strlen($listingData['preco']) > 0) {
            $details->addChild('ListPrice', $listingData['preco'])->addAttribute('currency', 'BRL');
        }
        if (strlen($listingData['aluguel']) > 0) {
            $details->addChild('RentalPrice', $listingData['aluguel'])->addAttribute('currency', 'BRL');
        }
        $details->addChild('PropertyAdministrationFee', $listingData['condominio'])->addAttribute('currency', 'BRL');
        $details->addChild('YearlyTax', $listingData['iptu'])->addAttribute('currency', 'BRL');
        $details->addChild('PropertyType', $listingData['tipo_imovel']);
        $descriptionNode = dom_import_simplexml($details->addChild('Description'));
        $descriptionNode->appendChild($descriptionNode->ownerDocument->createCDATASection($listingData['descricao']));
        $details->addChild('LivingArea', $listingData['area_util'])->addAttribute('unit', 'square metres');
        $details->addChild('LotArea', $listingData['area_total'])->addAttribute('unit', 'square metres');
        $details->addChild('Bathrooms', $listingData['banheiros']);
        $details->addChild('Bedrooms', $listingData['quartos']);
        $details->addChild('Garage', $listingData['vagas'])->addAttribute('type', 'Parking Space');
        $details->addChild('Floors', $listingData['nmr_andares']);
        $details->addChild('UnitFloor', $listingData['andar']);
        $details->addChild('Buildings', $listingData['nmr_torres']);
        $details->addChild('Suites', $listingData['suites']);
        $details->addChild('YearBuilt', $listingData['construcao']);
        $details->addChild('UsageType', 'residential');

        $features = $details->addChild('Features');
        foreach ($listingData['features'] as $feature) {
            $features->addChild('Feature', $feature);
        }

        $warranties = $details->addChild('Warranties');
        foreach ($listingData['warranties'] as $warranty) {
            $warranties->addChild('Warranty', $warranty);
        }

        $location = $newListing->addChild('Location');
        $location->addAttribute('displayAddress', 'Street');
        $location->addChild('Country', $listingData['pais'])->addAttribute('abbreviation', $listingData['pais_abbr']);
        $location->addChild('State', $listingData['estado'])->addAttribute('abbreviation', $listingData['estado_abbr']);
        $cityNode = dom_import_simplexml($location->addChild('City'));
        $cityNode->appendChild($cityNode->ownerDocument->createCDATASection($listingData['cidade']));
        $location->addChild('Zone', $listingData['zona']);
        $neighborhoodNode = dom_import_simplexml($location->addChild('Neighborhood'));
        $neighborhoodNode->appendChild($neighborhoodNode->ownerDocument->createCDATASection($listingData['bairro']));
        $addressNode = dom_import_simplexml($location->addChild('Address'));
        $addressNode->appendChild($addressNode->ownerDocument->createCDATASection($listingData['endereco']));
        $location->addChild('StreetNumber', $listingData['numero']);
        $location->addChild('Complement', $listingData['complemento']);
        $location->addChild('PostalCode', $listingData['cep']);

        $contactInfo = $newListing->addChild('ContactInfo');
        $nameNode = dom_import_simplexml($contactInfo->addChild('Name'));
        $nameNode->appendChild($nameNode->ownerDocument->createCDATASection($listingData['nome_contato']));
        // $contactInfo->addChild('Name', $listingData['nome_contato']);
        $contactInfo->addChild('Email', $listingData['email_contato']);
        $contactInfo->addChild('Website', $listingData['website_contato']);
        $contactInfo->addChild('Logo', $listingData['logo_contato']);
        $contactInfo->addChild('Telephone', $listingData['telefone_contato']);

        // $contactLocation = $contactInfo->addChild('Location');
        // $contactLocation->addChild('Country', $listingData['pais'])->addAttribute('abbreviation', $listingData['pais_abbr']);
        // $contactLocation->addChild('State', $listingData['estado'])->addAttribute('abbreviation', $listingData['estado_abbr']);
        // $contactLocation->addChild('City', $listingData['cidade']);
        // $contactLocation->addChild('Neighborhood', $listingData['bairro_comercial']);
        // $contactLocation->addChild('Address', $listingData['endereco_comercial']);
        // $contactLocation->addChild('PostalCode', $listingData['cep_comercial']);
    }

    public function updateListing($listingId, $newData)
    {
        $listings = $this->xml->Listings;

        foreach ($listings->children() as $listing) {
            if ((string)$listing->ListingID == $listingId) {
                foreach ($newData as $key => $value) {
                    if ($listing->Details->{$key}) {
                        $listing->Details->{$key} = $value;
                    } else if ($listing->{$key}) {
                        $listing->{$key} = $value;
                    }
                }
                break;
            }
        }
    }

    public function removeListing($listingId)
    {
        $dom = dom_import_simplexml($this->xml);
        foreach ($dom->getElementsByTagName('Listing') as $listing) {
            if ($listing->getElementsByTagName('ListingID')->item(0)->textContent == $listingId) {
                $dom->documentElement->removeChild($listing);
            }
        }
        $this->xml = simplexml_import_dom($dom);
    }

    public function saveXML()
    {
        $this->xml->asXML('../includes/uploads/listings.xml');
    }

    public function getXMLString()
    {
        return $this->xml->asXML();
    }
}
