<?php
/* Smarty version 5.7.0, created on 2025-11-22 15:56:28
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6921cf1c0b7065_81986643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5857ec153d7a51d8d9db8a56a2d48cafd5efd8f1' => 
    array (
      0 => 'index.tpl',
      1 => 1763823385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_6921cf1c0b7065_81986643 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\techstorage\\public\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<section class="main">
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
                            <form action="../src/controllers/edita_produto.php" method="POST">
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
