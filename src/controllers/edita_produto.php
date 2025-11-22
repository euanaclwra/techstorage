<?php
require_once __DIR__ . '/../../core/smarty_init.php';
require_once __DIR__ . '/../../src/models/Produto.php';
$pdo = require_once __DIR__ . '/../../config/connection.php';

# Verifica se o client enviou um ID pra ser alterado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        # Obtém os dados do produto pelo ID
        $produto = Produto::getProdutoById($pdo, $id);        

        # Envia os dados do produto selecionado pro template
        $smarty->assign('produto', $produto);
        $smarty->assign('titulo', 'Editar Produto');
        $smarty->display('cadastro.tpl');
    } catch (PDOException $e) {
        echo 'ERRO: ' . $e->getMessage();
    }
}
?>