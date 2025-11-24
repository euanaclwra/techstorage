<?php
/* Smarty version 5.7.0, created on 2025-11-24 13:00:33
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_692448e1a86328_32672295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f10709be644f3aede91da16c469f85685127f62' => 
    array (
      0 => 'index.tpl',
      1 => 1763984517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_692448e1a86328_32672295 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\work\\www\\techstorage\\public\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<section class="main">
    <div class="d-flex justify-content-between align-items-center">
        <div class="box">
            <h1 class="page-title">
                Estoque
            </h1>
            <a href="cadastro.php">
                <button class="btn-blue">
                    + Novo Produto
                </button>            
            </a>
        </div>
        <div class="d-flex align-items-center">
            <?php if ($_smarty_tpl->getValue('temEstoqueBaixo')) {?>
                <div class="text-danger text-right small">
                    <strong>Atenção!</strong>
                    <br>
                    Existem produtos com<br>baixa quantidade em estoque.
                </div>
                <div class="ml-3">
                    <img src="img/alerta.png"></img>
                </div>
            <?php }?>            
        </div>        
    </div>

    <br>

    <table class="table table-striped table-borderless">
        <thead>
            <tr>
                <th class="table-header">
                    Código
                </th>
                <th class="table-header">
                    Nome
                </th>
                <th class="table-header">
                    Custo (R$)
                </th>
                <th class="table-header">
                    Qtd.
                </th>
                <th class="table-header" width="5%"></th>
                <th class="table-header" width="5%"></th>
            </tr>
        </thead>
        <tbody>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('produtos')) > 0) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('produtos'), 'produto');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('produto')->value) {
$foreach0DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('produto')->getQtdEstoque() < 3) {?>
                        <tr class="text-danger">
                            <td>
                                <?php echo $_smarty_tpl->getValue('produto')->getCodigoBarras();?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getValue('produto')->getNome();?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('produto')->getCustoReposicao(),2,',','.');?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getValue('produto')->getQtdEstoque();?>

                                <img src="img/alerta.png" class="table-icon-alert"></img>
                            </td>
                            <td class="text-center">
                                <form action="../src/controllers/edita_produto.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('produto')->getId();?>
">
                                    <button class="table-button" type="submit">
                                        <img src="img/editar.png">
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="../src/controllers/exclui_produto.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('produto')->getId();?>
">
                                    <button class="table-button" type="submit">
                                        <img src="img/excluir.png">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } else { ?>
                        <tr>
                            <td>
                                <?php echo $_smarty_tpl->getValue('produto')->getCodigoBarras();?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getValue('produto')->getNome();?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('produto')->getCustoReposicao(),2,',','.');?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getValue('produto')->getQtdEstoque();?>

                            </td>
                            <td class="text-center">
                                <form action="../src/controllers/edita_produto.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('produto')->getId();?>
">
                                    <button class="table-button" type="submit">
                                        <img src="img/editar.png">
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="../src/controllers/exclui_produto.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('produto')->getId();?>
">
                                    <button class="table-button" type="submit">
                                        <img src="img/excluir.png">
                                    </button>
                                </form>
                            </td>
                        </tr>                    
                    <?php }?>                    
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <tr>
                    <td colspan="6" class="text-center">
                        <h3>
                            Você ainda não cadastrou nenhum produto :(
                        </h3>
                    </td>
                </tr>
            <?php }?>
        </tbody>            
    </table>
</section><?php }
}
