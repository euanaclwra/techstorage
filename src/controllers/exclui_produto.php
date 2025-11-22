<?php
require_once __DIR__ . '/../../core/smarty_init.php';
require_once __DIR__ . '/../../src/models/Produto.php';
$pdo = require_once __DIR__ . '/../../config/connection.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $produto = new Produto($id, $pdo);
        $produto->excluir();

        // Volta pra index pra recarregar a lista de produtos
        header("Location: ../../public/index.php");
        exit; 
    } catch (PDOException $e) {
        echo 'ERRO: ' . $e->getMessage();
    }
}
?>