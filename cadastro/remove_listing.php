<?php
include_once "../includes/connection.php";
require_once './XMLManager.php';

header("Content-Type: application/json");


$data = json_decode(file_get_contents("php://input"), true);
$listingId = $data['listingId'];

// Suponhamos que você tenha instanciado sua classe em algum lugar. Aqui é apenas para ilustração.
$listings = new XMLManager();

// Chamar o método para remover o listing
$listings->removeListing($listingId);

// Retorne um JSON de sucesso. Adicione mais lógica aqui se quiser retornar um status diferente com base no sucesso ou falha.
echo json_encode(["success" => true]);

?>
