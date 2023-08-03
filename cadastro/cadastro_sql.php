<?php
include_once "../includes/connection.php";
include './XMLManager.php';

$zap = $_REQUEST['zap'];
$codigo_interno = $_REQUEST['codigo_interno'];
$tipo_imovel = $_REQUEST['tipo_imovel'];
$preco = $_REQUEST['preco'];
$iptu = $_REQUEST['iptu'];
$tipo_negocio = $_REQUEST['tipo_negocio'];
$negocio = $_REQUEST['negocio'];
$tipo_anuncio = $_REQUEST['tipo_anuncio'];
$quartos = $_REQUEST['quartos'];
$suites = $_REQUEST['suites'];
$banheiros = $_REQUEST['banheiros'];
$vagas = $_REQUEST['vagas'];
$area_util = $_REQUEST['area_util'];
$area_total = $_REQUEST['area_total'];
$andar = $_REQUEST['andar'];
$cep = $_REQUEST['cep'];
$cidade = $_REQUEST['cidade'];
$bairro = $_REQUEST['bairro'];
$estado = $_REQUEST['estado'];
$endereco = $_REQUEST['endereco'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$bairro_comercial = $_REQUEST['bairro_comercial'];
$nmr_andares = $_REQUEST['nmr_andares'];
$nmr_unidades = $_REQUEST['nmr_unidades'];
$nmr_torres = $_REQUEST['nmr_torres'];
$construcao = $_REQUEST['construcao'];
$titulo = $_REQUEST['titulo'];
$descricao = $_REQUEST['descricao'];
$deposito = $_REQUEST['deposito'];
$fiador = $_REQUEST['fiador'];
$seguro = $_REQUEST['seguro'];
$carta = $_REQUEST['carta'];
$titulo_capitalizacao = $_REQUEST['titulo_capitalizacao'];

$ac_animais = @$_POST['ac_animais'];
$ar_condicionado = @$_POST['ar_condicionado'];
$closet = @$_POST['closet'];
$cozinha_ame = @$_POST['cozinha_ame'];
$lareira = @$_POST['lareira'];
$mobiliado = @$_POST['mobiliado'];
$varanda_gourmet = @$_POST['varanda_gourmet'];
$academia = @$_POST['academia'];
$churrasqueira = @$_POST['churrasqueira'];
$cinema = @$_POST['cinema'];
$espaco_gourmet = @$_POST['espaco_gourmet'];
$jardim = @$_POST['jardim'];
$piscina = @$_POST['piscina'];
$playground = @$_POST['playground'];
$squash = @$_POST['squash'];
$tenis = @$_POST['tenis'];
$poliesportiva = @$_POST['poliesportiva'];
$festas = @$_POST['festas'];
$jogos = @$_POST['jogos'];
$deficientes = @$_POST['deficientes'];
$bicicletario = @$_POST['bicicletario'];
$coworking = @$_POST['coworking'];
$elevador = @$_POST['elevador'];
$lavanderia = @$_POST['lavanderia'];
$sauna = @$_POST['sauna'];
$spa = @$_POST['spa'];

$features = array();
if(isset($_POST['ac_animais'])) $features[] = 'ac_animais';
if(isset($_POST['ar_condicionado'])) $features[] = 'ar_condicionado';
if(isset($_POST['closet'])) $features[] = 'closet';
if(isset($_POST['cozinha_ame'])) $features[] = 'cozinha_americana';
if(isset($_POST['lareira'])) $features[] = 'lareira';
if(isset($_POST['mobiliado'])) $features[] = 'mobiliado';
if(isset($_POST['varanda_gourmet'])) $features[] = 'varanda_gourmet';
if(isset($_POST['academia'])) $features[] = 'academia';
if(isset($_POST['churrasqueira'])) $features[] = 'churrasqueira';
if(isset($_POST['cinema'])) $features[] = 'cinema';
if(isset($_POST['espaco_gourmet'])) $features[] = 'espaco_gourmet';
if(isset($_POST['jardim'])) $features[] = 'jardim';
if(isset($_POST['piscina'])) $features[] = 'piscina';
if(isset($_POST['playground'])) $features[] = 'playground';
if(isset($_POST['squash'])) $features[] = 'squash';
if(isset($_POST['tenis'])) $features[] = 'tenis';
if(isset($_POST['poliesportiva'])) $features[] = 'quadra_poliesportiva';
if(isset($_POST['festas'])) $features[] = 'sala_de_festas';
if(isset($_POST['jogos'])) $features[] = 'sala_de_jogos';
if(isset($_POST['deficientes'])) $features[] = 'acesso_para_deficientes';
if(isset($_POST['bicicletario'])) $features[] = 'bicicletario';
if(isset($_POST['coworking'])) $features[] = 'coworking';
if(isset($_POST['elevador'])) $features[] = 'elevador';
if(isset($_POST['lavanderia'])) $features[] = 'lavanderia';
if(isset($_POST['sauna'])) $features[] = 'sauna';
if(isset($_POST['spa'])) $features[] = 'spa';


$headerInfo = array(
    'Provider' => 'Desenvolvedor do Feed',
    'Email' => 'lucasmatutani@gmail.com',
    'ContactName' => 'Lucas Matutani',
    'PublishDate' => '2023-06-29',
    'Telephone' => '11-948610869',
);

$warranties = array();
if(isset($_POST['deposito'])) $warranties[] = 'deposito';
if(isset($_POST['fiador'])) $warranties[] = 'fiador';
if(isset($_POST['seguro'])) $warranties[] = 'seguro';
if(isset($_POST['carta'])) $warranties[] = 'carta';
if(isset($_POST['titulo'])) $warranties[] = 'titulo';

// exemplo de como usar a classe
$listingData = array(
    'codigo_interno' => $_REQUEST['codigo_interno'],
    'titulo' => $_REQUEST['titulo'],
    'negocio' => $_REQUEST['negocio'],
    'tipo_anuncio' => $_REQUEST['tipo_anuncio'],
    'preco' => $_REQUEST['preco'],
    'iptu' => $_REQUEST['iptu'],
    'tipo_imovel' => $_REQUEST['tipo_imovel'],
    'descricao' => $_REQUEST['descricao'],
    'area_util' => $_REQUEST['area_util'],
    'area_total' => $_REQUEST['area_total'],
    'banheiros' => $_REQUEST['banheiros'],
    'quartos' => $_REQUEST['quartos'],
    'vagas' => $_REQUEST['vagas'],
    'nmr_andares' => $_REQUEST['nmr_andares'],
    'andar' => $_REQUEST['andar'],
    'nmr_torres' => $_REQUEST['nmr_torres'],
    'suites' => $_REQUEST['suites'],
    'construcao' => $_REQUEST['construcao'],
    'features' => $features,  // insira todas as features aqui
    'warranties' => $warranties,
    'pais' => 'Brasil',
    'pais_abbr' => 'BR',
    'estado' => $_REQUEST['estado'],
    'estado_abbr' => 'SP', // substitua pela abreviação do estado
    'cidade' => $_REQUEST['cidade'],
    'zona' => 'Zona Leste',  // substitua pela zona correta
    'bairro' => $_REQUEST['bairro'],
    'endereco' => $_REQUEST['endereco'],
    'numero' => $_REQUEST['numero'],
    'complemento' => $_REQUEST['complemento'],
    'cep' => $_REQUEST['cep'],
    'nome_contato' => 'Ghaya Imóveis',
    'email_contato' => 'contato@ghayaimoveis.com.br',
    'website_contato' => 'http://www.ghayaimoveis.com.br',
    'logo_contato' => 'http://www.ghayaimoveis.com.br/assets/images/logo/logo-ghaya.png',
    'telefone_contato' => '(11) 5055-5598',
    'bairro_comercial' => 'Vila Buarque',
    'endereco_comercial' => 'Rua Doutor Cesário Mota Júnior, 369 - Conjunto 23',
    'cep_comercial' => '01221-020',
);

if ($_REQUEST['negocio'] == "Sale/Rent" || $_REQUEST['negocio'] == "For Sale") {
    $listingData['preco'] = $_REQUEST['preco'];
}

if ($_REQUEST['negocio'] == "Sale/Rent" || $_REQUEST['negocio'] == "For Rent") {
    $listingData['aluguel'] = $_REQUEST['aluguel'];
}

$manager = new XMLManager($headerInfo,'<Listings></Listings>');
$manager->addListing($listingData);

$manager->saveXML();



if (isset($_FILES['imagens']) && count($_FILES['imagens']['name']) > 0) {
    for ($i = 0; $i < count($_FILES['imagens']['name']); $i++) {
        $file_name = $_FILES['imagens']['name'][$i];
        $file_tmp = $_FILES['imagens']['tmp_name'][$i];
        $file_type = $_FILES['imagens']['type'][$i];
        $file_size = $_FILES['imagens']['size'][$i];
        $file_error = $_FILES['imagens']['error'][$i];

        // Verifica se o arquivo foi enviado com sucesso
        if ($file_error == UPLOAD_ERR_OK) {

            // Define o caminho onde o arquivo será salvo
            // $caminho = ROOT_PATH . "img/" . $codigo_interno;
            $caminho = "uploads/" . $codigo_interno;
            if (!file_exists($caminho)) {
                mkdir($caminho, 0777, true);
            }
            echo $caminho;
            // Move o arquivo para o diretório de uploads
            copy($file_tmp, $caminho . "/" . basename($file_tmp));
        } else {
            echo "Erro ao enviar o arquivo: " . $file_error . "<br>";
        }
    }
} else {
    echo "Nenhum arquivo enviado";
}
// $data = $conn->query('SELECT * FROM imoveis');
// $linha = mysqli_fetch_assoc($data);
// if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
$sql = "INSERT INTO imoveis set tipo_imovel='$tipo_imovel', tipo_anuncio='$tipo_anuncio', tipo_negocio='$tipo_negocio', preco='$preco', iptu='$iptu', negocio='$negocio', quartos='$quartos', suites='$suites', banheiros='$banheiros', vagas='$vagas', area_util='$area_util', area_total='$area_total', andar='$andar', cep='$cep', cidade='$cidade', bairro='$bairro', estado='$estado', endereco='$endereco', numero='$numero', complemento='$complemento', bairro_comercial='$bairro_comercial', nmr_andares='$nmr_andares', nmr_unidades='$nmr_unidades', nmr_torres='$nmr_torres', construcao='$construcao', titulo='$titulo', descricao='$descricao', deposito='$deposito', fiador='$fiador', seguro='$seguro', carta='$carta', titulo_capitalizacao='$titulo_capitalizacao',ac_animais='$ac_animais', ar_condicionado='$ar_condicionado', closet='$closet', cozinha_ame='$cozinha_ame', lareira='$lareira', mobiliado='$mobiliado', varanda_gourmet='$varanda_gourmet', academia='$academia', churrasqueira='$churrasqueira', cinema='$cinema', espaco_gourmet='$espaco_gourmet', jardim='$jardim', piscina='$piscina',playground='$playground', squash='$squash', tenis='$tenis', poliesportiva='$poliesportiva', festas='$festas', jogos='$jogos', deficientes='$deficientes', bicicletario='$bicicletario', coworking='$coworking', elevador='$elevador', lavanderia='$lavanderia', sauna='$sauna', spa='$spa', img='$caminho'";
// } else {
//     $sql = "INSERT INTO imoveis set usuario_id='$usuario_id', grupo='$grupo', avaliador='$avaliador', caso='$caso', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34',txt35='$txt35'";
// }
if (mysqli_query($conn, $sql)) {
    echo "FUNFOU!!!!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
