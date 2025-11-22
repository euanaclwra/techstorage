<?php
require_once __DIR__ . '/../core/smarty_init.php'; 
require_once '../src/models/Produto.php';

$pdo = require_once '../config/connection.php';

$listaProdutos = Produto::buscar($pdo); # Armazena todos os produtos cadastrados
$temEstoqueBaixo = false;

# Verifica se existe algum produto com quantidade em estoque menor que 3
foreach ($listaProdutos as $produto) {
    if ($produto->getQtdEstoque() < 3) {
        $temEstoqueBaixo = true;
        break;
    }
}

# Envia os dados pro template
$smarty->assign('produtos', $listaProdutos);
$smarty->assign('temEstoqueBaixo', $temEstoqueBaixo);
$smarty->display('index.tpl');
?>