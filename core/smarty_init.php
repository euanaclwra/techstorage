<?php
require_once 'Smarty.class.php';

$smarty = new Smarty\Smarty();

// Define os diretórios de salvamento
$smarty->setTemplateDir('\xampp\htdocs\techstorage\public\templates');
$smarty->setCompileDir('\xampp\htdocs\techstorage\public\templates_c');
$smarty->setCacheDir('\xampp\htdocs\techstorage\public\templates_cache');
?>