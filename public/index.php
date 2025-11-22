<?php
require_once 'Smarty.class.php';
require_once '../src/models/Produto.php';

$pdo = require_once '../config/connection.php';
$smarty = new Smarty\Smarty();
$listaProdutos = Produto::buscar($pdo);

$smarty->assign('produtos', $listaProdutos);
$smarty->display('index.tpl');
?>