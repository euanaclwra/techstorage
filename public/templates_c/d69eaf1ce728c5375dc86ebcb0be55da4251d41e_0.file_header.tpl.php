<?php
/* Smarty version 5.7.0, created on 2025-11-21 23:54:30
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6920eda67c3ad2_03151277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69eaf1ce728c5375dc86ebcb0be55da4251d41e' => 
    array (
      0 => 'header.tpl',
      1 => 1763765668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6920eda67c3ad2_03151277 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\techstorage\\public\\templates';
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStorage | Gestão de Estoque</title>   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <link href="/techstorage/public/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/techstorage/public/img/favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light p-4">        
            <div class="container-fluid">
                <a href="index.php">
                    <img src="/techstorage/public/img/logo-horizontal.png" alt="TechStorage" width="300">
                </a>  

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav" aria-controls="menuNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="menuNav">          
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/techstorage/public/index.php">estoque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/techstorage/public/config.php">configurações</a>
                        </li>
                    </ul> 
                </div>
            </div>   
        </nav>
    </header> 
    <hr> 
    
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
