<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = 'uploads/';
    $filename = 'file.xml';

    $xmlData = file_get_contents('php://input');
    $result = file_put_contents($targetDir . $filename, $xmlData);

    if ($result !== false) {
        echo json_encode(['success' => true, 'message' => 'Arquivo XML salvo com sucesso.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar o arquivo XML.']);
    }
}
