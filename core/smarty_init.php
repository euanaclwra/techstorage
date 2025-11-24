<?php
require_once 'Smarty.class.php';

# Cria o objeto global
$smarty = new Smarty\Smarty();

# Define os diretórios de salvamento
$smarty->setTemplateDir('\work\www\techstorage\public\templates');
$smarty->setCompileDir('\work\www\techstorage\public\templates_c');
$smarty->setCacheDir('\work\www\techstorage\public\templates_cache');
?>