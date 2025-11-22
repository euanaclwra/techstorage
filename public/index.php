<?php
require_once 'Smarty.class.php';
require_once '../src/models/Produto.php';

$pdo = require_once '../config/connection.php';
$smarty = new Smarty\Smarty();
$listaProdutos = Produto::buscar($pdo);
$temEstoqueBaixo = false;

foreach ($listaProdutos as $produto) {
    if ($produto->getQtdEstoque() < 3) {
        $temEstoqueBaixo = true;
        break;
    }
}

$smarty->assign('produtos', $listaProdutos);
$smarty->assign('temEstoqueBaixo', $temEstoqueBaixo);
$smarty->display('index.tpl');
?>