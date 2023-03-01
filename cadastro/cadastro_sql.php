<?php
//Define a constante
define('ROOT_PATH', dirname(__FILE__) . "/");
include_once "../includes/connection.php";

$codigo_zap = $_REQUEST['codigo_zap'];
$tipo_imovel = $_REQUEST['tipo_imovel'];
$tipo_negocio = $_REQUEST['tipo_negocio'];
$categoria = $_REQUEST['categoria'];
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
$uf = $_REQUEST['uf'];
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

if (isset($_FILES['imagens']) && count($_FILES['imagens']['name']) > 0) {
    for ($i = 0; $i < count($_FILES['imagens']['name']); $i++) {
        $file_name = $_FILES['imagens']['name'][$i];
        $file_tmp = $_FILES['imagens']['tmp_name'][$i];
        $file_type = $_FILES['imagens']['type'][$i];
        $file_size = $_FILES['imagens']['size'][$i];
        $file_error = $_FILES['imagens']['error'][$i];

        // Verifica se o arquivo foi enviado com sucesso
        if ($file_error == UPLOAD_ERR_OK) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["imagens"]["name"]);

            // Define o caminho onde o arquivo será salvo
            // $caminho = ROOT_PATH . "img/" . $codigo_zap;
            if (!file_exists($target_file)) {
                mkdir($target_file, 0777, true);
            }
            // Move o arquivo para o diretório de uploads
            move_uploaded_file($_FILES['imagens']['tmp_name'], $target_file);
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
$sql = "INSERT INTO imoveis set tipo_imovel='$tipo_imovel', categoria='$categoria', tipo_negocio='$tipo_negocio', quartos='$quartos', suites='$suites', banheiros='$banheiros', vagas='$vagas', area_util='$area_util', area_total='$area_total', andar='$andar', cep='$cep', cidade='$cidade', bairro='$bairro', uf='$uf', endereco='$endereco', numero='$numero', complemento='$complemento', bairro_comercial='$bairro_comercial', nmr_andares='$nmr_andares', nmr_unidades='$nmr_unidades', nmr_torres='$nmr_torres', construcao='$construcao', titulo='$titulo', descricao='$descricao', ac_animais='$ac_animais', ar_condicionado='$ar_condicionado', closet='$closet', cozinha_ame='$cozinha_ame', lareira='$lareira', mobiliado='$mobiliado', varanda_gourmet='$varanda_gourmet', academia='$academia', churrasqueira='$churrasqueira', cinema='$cinema', espaco_gourmet='$espaco_gourmet', jardim='$jardim', piscina='$piscina',playground='$playground', squash='$squash', tenis='$tenis', poliesportiva='$poliesportiva', festas='$festas', jogos='$jogos', deficientes='$deficientes', bicicletario='$bicicletario', coworking='$coworking', elevador='$elevador', lavanderia='$lavanderia', sauna='$sauna', spa='$spa', img='$caminho'";
// } else {
//     $sql = "INSERT INTO imoveis set usuario_id='$usuario_id', grupo='$grupo', avaliador='$avaliador', caso='$caso', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34',txt35='$txt35'";
// }
if (mysqli_query($conn, $sql)) {
    echo "FUNFOU!!!!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
