<?php
require_once __DIR__ . '\..\..\config/paths.php';
require_once CORE_PATH . '\smarty_init.php';
require_once SRC_PATH . '\models\Produto.php';

$pdo = require_once CONFIG_PATH . '\connection.php';

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