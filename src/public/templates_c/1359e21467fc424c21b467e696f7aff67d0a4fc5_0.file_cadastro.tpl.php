<?php
/* Smarty version 5.7.0, created on 2025-11-21 21:08:50
  from 'file:cadastro.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6920c6d2da04d2_29192020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1359e21467fc424c21b467e696f7aff67d0a4fc5' => 
    array (
      0 => 'cadastro.tpl',
      1 => 1763755726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_6920c6d2da04d2_29192020 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\techstorage\\public\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<section class="main">
    <a href="index.php" class="link-icon">
        <svg viewBox="0 0 24 24" width="20" height="20" focusable="false" role="img" aria-label="Voltar">
            <path d="M15 6 L9 12 L15 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> 
        Voltar       
    </a>
    <h1 class="page-title">
        <?php echo $_smarty_tpl->getValue('titulo');?>

    </h1>

    <br>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">  
                <form action="../src/controllers/processa_produto.php" method="post">      
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $_smarty_tpl->getValue('produto')['nome'];?>
" required>
                    </div>
                
                    <div class="row">
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="qtd" class="form-label">Quantidade em Estoque</label>
                            <input type="number" id="qtd" name="qtd" class="form-control" value="<?php echo $_smarty_tpl->getValue('produto')['qtd'];?>
">
                        </div>
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="codigo" class="form-label">Código de Barras</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" value="<?php echo $_smarty_tpl->getValue('produto')['codigo'];?>
">
                        </div>
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="codigo" class="form-label">Custo de Reposição</label>
                            <input type="text" id="custo" name="custo" class="form-control" value="<?php echo $_smarty_tpl->getValue('produto')['custo'];?>
">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" name="descricao" class="form-control" value="<?php echo $_smarty_tpl->getValue('produto')['descricao'];?>
"></textarea>
                    </div>

                    <button class="btn-blue" type="submit">
                        Cadastrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section><?php }
}
