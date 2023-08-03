<?php
include_once "../includes/connection.php";
include './XMLManager.php';

$zap = $_REQUEST['zap'];
$codigo_interno = $_REQUEST['codigo_interno'];
$codigo_interno = intval($codigo_interno);
$tipo_imovel = $_REQUEST['tipo_imovel'];
$preco = $_REQUEST['preco'];
$preco = str_replace('R$', '', $preco);
$preco = intval($preco);
$condominio = $_REQUEST['condominio'];
$condominio = str_replace('R$', '', $condominio);
$condominio = intval($condominio);
$iptu = $_REQUEST['iptu'];
$iptu = str_replace('R$', '', $iptu);
$iptu = intval($iptu);
@$valor_aluguel = $_REQUEST['valor_aluguel'];
@$valor_aluguel = str_replace('R$', '', $valor_aluguel);
@$valor_aluguel = intval($valor_aluguel);
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

@$deposito = $_REQUEST['deposito'];
@$fiador = $_REQUEST['fiador'];
@$seguro = $_REQUEST['seguro'];
@$carta = $_REQUEST['carta'];
@$titulo_capitalizacao = $_REQUEST['titulo_capitalizacao'];

$ac_animais = @$_POST['ac_animais'];
$ar_condicionado = @$_POST['ar_condicionado'];
$closet = @$_POST['closet'];
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
$bicicletario = @$_POST['bicicletario'];
$coworking = @$_POST['coworking'];
$elevador = @$_POST['elevador'];
$lavanderia = @$_POST['lavanderia'];
$sauna = @$_POST['sauna'];
$spa = @$_POST['spa'];

$headerInfo = array(
    'Provider' => 'Desenvolvedor do Feed',
    'Email' => 'lucasmatutani@gmail.com',
    'ContactName' => 'Lucas Matutani',
    'PublishDate' => '2023-06-29',
    'Telephone' => '11-948610869',
);

$features = array();
if (isset($_POST['ac_animais'])) $features[] = 'Pets Allowed';
if (isset($_POST['ar_condicionado'])) $features[] = 'Cooling';
if (isset($_POST['closet'])) $features[] = 'Closet';
if (isset($_POST['lareira'])) $features[] = 'Fireplace';
if (isset($_POST['mobiliado'])) $features[] = 'Furnished';
if (isset($_POST['varanda_gourmet'])) $features[] = 'Gourmet Balcony';
if (isset($_POST['academia'])) $features[] = 'Gym';
if (isset($_POST['churrasqueira'])) $features[] = 'BBQ';
if (isset($_POST['cinema'])) $features[] = 'Media Room';
if (isset($_POST['espaco_gourmet'])) $features[] = 'Gourmet Area';
if (isset($_POST['jardim'])) $features[] = 'Garden Area';
if (isset($_POST['piscina'])) $features[] = 'Pool';
if (isset($_POST['playground'])) $features[] = 'Playground';
if (isset($_POST['squash'])) $features[] = 'Squash';
if (isset($_POST['tenis'])) $features[] = 'Tennis court';
if (isset($_POST['poliesportiva'])) $features[] = 'Sports Court';
if (isset($_POST['festas'])) $features[] = 'Party Room';
if (isset($_POST['jogos'])) $features[] = 'Game room';
if (isset($_POST['bicicletario'])) $features[] = 'Bicycles Place';
if (isset($_POST['coworking'])) $features[] = 'Meeting Room';
if (isset($_POST['elevador'])) $features[] = 'Elevator';
if (isset($_POST['lavanderia'])) $features[] = 'Laundry';
if (isset($_POST['sauna'])) $features[] = 'Sauna';
if (isset($_POST['spa'])) $features[] = 'Spa';

$warranties = array();
if (isset($_POST['deposito'])) $warranties[] = 'SECURITY_DEPOSIT';
if (isset($_POST['fiador'])) $warranties[] = 'GUARANTOR';
if (isset($_POST['seguro'])) $warranties[] = 'INSURANCE_GUARANTEE';
if (isset($_POST['carta'])) $warranties[] = 'GUARANTEE_LETTER';
if (isset($_POST['titulo'])) $warranties[] = 'CAPITALIZATION_BONDS';

if (isset($_FILES['images']['name'])) {

    $folder_name = '../includes/uploads/images/' . $codigo_interno;
    
    // Criar a pasta
    if (!file_exists($folder_name)) {
        mkdir($folder_name, 0755, true);
    }
    
    foreach ($_FILES['images']['name'] as $key => $name) {
        $filename = $_FILES['images']['name'][$key];
        $filename = str_replace(' ', '', $filename);
        $destination = $folder_name . '/' . $filename;
        $path_to_img = 'includes/uploads/images/' . $codigo_interno. '/' . $filename;

        // Salvar imagem na pasta desejada
        if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $destination)) {
            // Salvar o caminho no banco de dados
            $sql = "INSERT INTO images set image_path='https://ghayaimoveis.com/{$path_to_img}', imovel_id='$codigo_interno'";
            $conn->query($sql);
        }
    }
}else {
    echo "Nenhum arquivo enviado!";
}

$data = $conn->query("SELECT image_path FROM images WHERE imovel_id = '$codigo_interno'");
$paths = [];
if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        $paths[] = $row['image_path'];
    }
}

// exemplo de como usar a classe
$listingData = array(
    'codigo_interno' => $_REQUEST['codigo_interno'],
    'titulo' => $_REQUEST['titulo'],
    'negocio' => $_REQUEST['negocio'],
    'tipo_anuncio' => $_REQUEST['tipo_anuncio'],
    'images' => $paths,
    'preco' => "",
    'aluguel' => "",
    'iptu' => $iptu,
    'condominio' => $condominio,
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
    'features' => $features,
    'warranties' => $warranties,
    'pais' => 'Brasil',
    'pais_abbr' => 'BR',
    'estado' => $_REQUEST['estado'],
    'estado_abbr' => 'SP',
    'cidade' => $_REQUEST['cidade'],
    'zona' => $_REQUEST['zona'],
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
    $listingData['preco'] = $preco;
}

if ($_REQUEST['negocio'] == "Sale/Rent" || $_REQUEST['negocio'] == "For Rent") {
    $listingData['aluguel'] = $valor_aluguel;
}


$manager = new XMLManager($headerInfo, '<Listings></Listings>');
$manager->addListing($listingData);

$manager->saveXML();



// if (isset($_FILES['imagens']) && count($_FILES['imagens']['name']) > 0) {
//     for ($i = 0; $i < count($_FILES['imagens']['name']); $i++) {
//         $file_name = $_FILES['imagens']['name'][$i];
//         $file_tmp = $_FILES['imagens']['tmp_name'][$i];
//         $file_type = $_FILES['imagens']['type'][$i];
//         $file_size = $_FILES['imagens']['size'][$i];
//         $file_error = $_FILES['imagens']['error'][$i];

//         // Verifica se o arquivo foi enviado com sucesso
//         if ($file_error == UPLOAD_ERR_OK) {

//             // Define o caminho onde o arquivo será salvo
//             // $caminho = ROOT_PATH . "img/" . $codigo_interno;
//             $caminho = "uploads/" . $codigo_interno;
//             if (!file_exists($caminho)) {
//                 mkdir($caminho, 0777, true);
//             }
//             echo $caminho;
//             // Move o arquivo para o diretório de uploads
//             copy($file_tmp, $caminho . "/" . basename($file_tmp));
//         } else {
//             echo "Erro ao enviar o arquivo: " . $file_error . "<br>";
//         }
//     }
// } else {
//     echo "Nenhum arquivo enviado";
// }

// $data = $conn->query('SELECT * FROM imoveis');
// $linha = mysqli_fetch_assoc($data);
// if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
$sql = "INSERT INTO imoveis set codigo_interno='$codigo_interno', tipo_imovel='$tipo_imovel', tipo_anuncio='$tipo_anuncio', tipo_negocio='$tipo_negocio', preco='$preco', iptu='$iptu', condominio='$condominio', negocio='$negocio', quartos='$quartos', suites='$suites', banheiros='$banheiros', vagas='$vagas', area_util='$area_util', area_total='$area_total', andar='$andar', cep='$cep', cidade='$cidade', bairro='$bairro', estado='$estado', endereco='$endereco', numero='$numero', complemento='$complemento', bairro_comercial='$bairro_comercial', nmr_andares='$nmr_andares', nmr_unidades='$nmr_unidades', nmr_torres='$nmr_torres', construcao='$construcao', titulo='$titulo', descricao='$descricao', deposito='$deposito', fiador='$fiador', seguro='$seguro', carta='$carta', titulo_capitalizacao='$titulo_capitalizacao', ac_animais='$ac_animais', ar_condicionado='$ar_condicionado', closet='$closet', lareira='$lareira', mobiliado='$mobiliado', varanda_gourmet='$varanda_gourmet', academia='$academia', churrasqueira='$churrasqueira', cinema='$cinema', espaco_gourmet='$espaco_gourmet', jardim='$jardim', piscina='$piscina',playground='$playground', squash='$squash', tenis='$tenis', poliesportiva='$poliesportiva', festas='$festas', jogos='$jogos', bicicletario='$bicicletario', coworking='$coworking', elevador='$elevador', lavanderia='$lavanderia', sauna='$sauna', spa='$spa'"; //adicionar caminho da imagem
// } else {
//     $sql = "INSERT INTO imoveis set usuario_id='$usuario_id', grupo='$grupo', avaliador='$avaliador', caso='$caso', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34',txt35='$txt35'";
// }
if (mysqli_query($conn, $sql)) {
    echo "FUNFOU!!!!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
