<?php
session_start();
include_once "../includes/connection.php";  // Inclui o arquivo de conexão

// Pega as informações do formulário
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Prepara a query SQL usando prepared statements para evitar SQL injection
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);  // "ss" indica que ambos os parâmetros são strings
$stmt->execute();

// Obtém o resultado e verifica se o usuário e a senha estão corretos
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $_SESSION["user"] = $username;
    header("Location:../index.php");
} else {
    echo 'Usuário ou senha inválidos.';
}

$stmt->close();
$conn->close();
?>

