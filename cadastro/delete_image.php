<?php
//delete_image.php
$data = json_decode(file_get_contents('php://input'), true);
$path = $data['path'];

unlink($path); // Remove o arquivo

// Remova a imagem do banco de dados
$sql = "DELETE FROM images WHERE image_path = '$path'";
$result = $conn->query($sql);
?>
