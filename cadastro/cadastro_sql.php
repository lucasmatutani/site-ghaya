<?php
include_once "../includes/connection.php";

$tipo_imovel = $_REQUEST['tipo_imovel'];
$categoria = $_REQUEST['categoria'];
$tipo_negociacao = $_REQUEST['tipo_negociacao'];
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
$codigo = $_REQUEST['codigo'];
$titulo = $_REQUEST['titulo'];
$descricao = $_REQUEST['descricao'];
$ac_animais = $_REQUEST['ac_animais'];
$ar_condicionado = $_REQUEST['ar_condicionado'];
$closet = $_REQUEST['closet'];
$cozinha_ame = $_REQUEST['cozinha_ame'];
$lareira = $_REQUEST['lareira'];
$mobiliado = $_REQUEST['mobiliado'];
$varanda_gourmet = $_REQUEST['varanda_gourmet'];
$academia = $_REQUEST['academia'];
$churrasqueira = $_REQUEST['churrasqueira'];
$cinema = $_REQUEST['cinema'];
$espaco_gourmet = $_REQUEST['cinema'];
$jardim = $_REQUEST['jardim'];
$piscina = $_REQUEST['piscina'];
$playground = $_REQUEST['playground'];
$squash = $_REQUEST['squash'];
$tenis = $_REQUEST['tenis'];
$poliesportiva = $_REQUEST['poliesportiva'];
$festas = $_REQUEST['festas'];
$jogos = $_REQUEST['jogos'];
$deficientes = $_REQUEST['deficientes'];
$bicicletario = $_REQUEST['bicicletario'];
$coworking = $_REQUEST['coworking'];
$elevador = $_REQUEST['elevador'];
$elevador = $_REQUEST['elevador'];
$lavanderia = $_REQUEST['lavanderia'];
$sauna = $_REQUEST['sauna'];
$spa = $_REQUEST['spa'];

$data = $conn->query('SELECT * FROM teste_spin');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE imoveis set grupo='$grupo', avaliador='$avaliador', caso='$caso', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34',txt35='$txt35' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO imoveis set usuario_id='$usuario_id', grupo='$grupo', avaliador='$avaliador', caso='$caso', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34',txt35='$txt35'";
}
if (mysqli_query($conn, $sql)) {
    header("");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
