<?php
include_once "../includes/connection.php";

 // Obtenha o caminho da imagem
 $data = json_decode(file_get_contents('php://input'), true);
 $path = $data['path'];

 // Exclua a imagem do servidor
//  unlink($path);

 // Exclua a imagem da base de dados
 $sql = "DELETE FROM images WHERE image_path = ?";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("s", $path);
 $stmt->execute();

 // Feche a conexão
 $stmt->close();
 $conn->close();

 // Responda com sucesso
 echo json_encode(['status' => 'success']);
