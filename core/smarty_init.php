<?php
require_once __DIR__ . '\..\config\paths.php';
require_once SMARTY_PATH . '\libs\Smarty.class.php';

# Cria o objeto global
$smarty = new Smarty\Smarty();

# Define os diretórios de salvamento
$smarty->setTemplateDir(PUBLIC_PATH . '\templates');
$smarty->setCompileDir(PUBLIC_PATH . '\templates_c');
$smarty->setCacheDir(PUBLIC_PATH . '\templates_cache');
?>