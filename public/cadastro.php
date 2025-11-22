<?php
require_once __DIR__ . '/../core/smarty_init.php'; 
require_once __DIR__ . '/../src/models/Produto.php';
$pdo = require_once __DIR__ . '/../config/connection.php';

$produto = new Produto(null, $pdo, '', '', '', '', ''); # Instância de Produto pra preencher os campos do form
                                                        # Quando aberto no modo de edição, o controller envia um objeto com atributos preenchidos

# Envia os dados pro template
$smarty->assign('titulo', 'Novo Produto');
$smarty->assign('produto', $produto);
$smarty->display('cadastro.tpl');
?>