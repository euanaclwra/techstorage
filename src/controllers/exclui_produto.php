<?php
require_once __DIR__ . '/../../core/smarty_init.php';
require_once __DIR__ . '/../../src/models/Produto.php';
$pdo = require_once __DIR__ . '/../../config/connection.php';

# Verifica se o client enviou um ID pra ser excluído
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        # Exclui o produto com esse ID
        $produto = new Produto($id, $pdo);
        $produto->excluir();

        # Volta pra index pra recarregar a lista de produtos
        header("Location: ../../public/index.php");
        exit; 
    } catch (PDOException $e) {
        echo 'ERRO: ' . $e->getMessage();
    }
}
?>