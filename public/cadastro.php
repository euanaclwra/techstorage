<?php
require_once __DIR__ . '/../smarty/libs/Smarty.class.php';
require_once __DIR__ . '/../src/models/Produto.php';
$pdo = require_once __DIR__ . '/../config/connection.php';

$smarty = new Smarty\Smarty();
$produto = new Produto(null, $pdo, '', '', '', '', '');

$smarty->assign('titulo', 'Novo Produto');
$smarty->assign('produto', $produto);

$smarty->display('cadastro.tpl');
?>