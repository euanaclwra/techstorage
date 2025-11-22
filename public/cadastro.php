<?php
require_once __DIR__ . '/../smarty/libs/Smarty.class.php';

$smarty = new Smarty\Smarty();

$smarty->assign('titulo', 'Novo Produto');
$smarty->assign('produto', [
    'nome' => '',
    'qtd' => '',
    'codigo' => '',
    'custo' => '',
    'descricao' => '',
]);

$smarty->display('cadastro.tpl');
?>