<?php
class XMLManager {
    private $xml;
    private $listingsNode;

    public function __construct($headerInfo, $xmlString) {
        if (file_exists('../includes/uploads/listings.xml')) {
            // Carrega o arquivo XML existente
            $this->xml = simplexml_load_file('../includes/uploads/listings.xml');
            $this->listingsNode = $this->xml->Listings;
        } else {
            // Cria um novo arquivo XML
            $this->xml = new SimpleXMLElement($xmlString);

            // Adiciona as informações do cabeçalho
            $header = $this->xml->addChild('Header');
            $header->addChild('Provider', $headerInfo['Provider']);
            $header->addChild('Email', $headerInfo['Email']);
            $header->addChild('ContactName', $headerInfo['ContactName']);
            $header->addChild('PublishDate', $headerInfo['PublishDate']);
            $header->addChild('Telephone', $headerInfo['Telephone']);

            $this->listingsNode = $this->xml->addChild('Listings');
        }
    }

    public function addListing($listingData) {
        $listings = $this->xml->Listings;
        $newListing = $listings->addChild('Listing');

        $newListing->addChild('ListingID', $listingData['codigo_interno']);
        $newListing->addChild('Title')->addCData($listingData['titulo']);
        $newListing->addChild('TransactionType', $listingData['negocio']);
        $newListing->addChild('PublicationType', $listingData['categoria']);

        // adiciona os detalhes do imóvel
        $details = $newListing->addChild('Details');
        $details->addChild('ListPrice', $listingData['preco'])->addAttribute('currency', 'BRL');
        $details->addChild('YearlyTax', $listingData['iptu'])->addAttribute('currency', 'BRL');
        $details->addChild('PropertyType', $listingData['tipo_imovel']);
        $details->addChild('Description')->addCData($listingData['descricao']);
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

        // adiciona as características do imóvel
        $features = $details->addChild('Features');
        foreach ($listingData['features'] as $feature) {
            $features->addChild('Feature', $feature);
        }

        // adiciona as garantias do imóvel
        $warranties = $details->addChild('Warranties');
        foreach ($listingData['warranties'] as $warranty) {
            $warranties->addChild('Warranty', $warranty);
        }

        // adiciona a localização do imóvel
        $location = $newListing->addChild('Location');
        $location->addAttribute('displayAddress', 'Street');
        $location->addChild('Country', $listingData['pais'])->addAttribute('abbreviation', $listingData['pais_abbr']);
        $location->addChild('State', $listingData['estado'])->addAttribute('abbreviation', $listingData['estado_abbr']);
        $location->addChild('City')->addCData($listingData['cidade']);
        $location->addChild('Zone', $listingData['zona']);
        $location->addChild('Neighborhood')->addCData($listingData['bairro']);
        $location->addChild('Address')->addCData($listingData['endereco']);
        $location->addChild('StreetNumber', $listingData['numero']);
        $location->addChild('Complement', $listingData['complemento']);
        $location->addChild('PostalCode', $listingData['cep']);

        // adiciona as informações de contato
        $contactInfo = $location->addChild('ContactInfo');
        $contactInfo->addChild('Name', $listingData['nome_contato']);
        $contactInfo->addChild('Email', $listingData['email_contato']);
        $contactInfo->addChild('Website', $listingData['website_contato']);
        $contactInfo->addChild('Logo', $listingData['logo_contato']);
        $contactInfo->addChild('Telephone', $listingData['telefone_contato']);

        $contactLocation = $contactInfo->addChild('Location');
        $contactLocation->addChild('Country', $listingData['pais'])->addAttribute('abbreviation', $listingData['pais_abbr']);
        $contactLocation->addChild('State', $listingData['estado'])->addAttribute('abbreviation', $listingData['estado_abbr']);
        $contactLocation->addChild('City', $listingData['cidade']);
        $contactLocation->addChild('Neighborhood', $listingData['bairro_comercial']);
        $contactLocation->addChild('Address', $listingData['endereco_comercial']);
        $contactLocation->addChild('PostalCode', $listingData['cep_comercial']);
    }

    public function updateListing($listingId, $newData) {
        $listings = $this->xml->Listings;

        foreach($listings->children() as $listing) {
            if((string)$listing->ListingID == $listingId) {
                foreach($newData as $key => $value) {
                    if($listing->Details->{$key}) {
                        $listing->Details->{$key} = $value;
                    } else if($listing->{$key}) {
                        $listing->{$key} = $value;
                    }
                }
                break;
            }
        }
    }

    public function saveXML() {
        $this->xml->asXML('../includes/uploads/listings.xml');
    }

    public function getXMLString() {
        return $this->xml->asXML();
    }
}

