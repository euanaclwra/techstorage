{include file="header.tpl"}

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
            {if $produtos|@count > 0}
                {foreach $produtos as $produto}
                    <tr>
                        <td>
                            {$produto->getCodigoBarras()}
                        </td>
                        <td>
                            {$produto->getNome()}
                        </td>
                        <td>
                            {number_format($produto->getCustoReposicao(), 2, ',', '.')}
                        </td>
                        <td>
                            {$produto->getQtdEstoque()}
                        </td>
                        <td class="text-center">
                            <form action="../src/controllers/edita_produto.php" method="POST">
                                <input type="hidden" name="id" value="{$produto->getId()}">
                                <button class="table-button" type="submit">
                                    <img src="img/editar.png">
                                </button>
                            </form>
                        </td>
                        <td class="text-center">
                            <form action="../src/controllers/exclui_produto.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                <input type="hidden" name="id" value="{$produto->getId()}">
                                <button class="table-button" type="submit">
                                    <img src="img/excluir.png">
                                </button>
                            </form>
                        </td>
                    </tr>
                {/foreach}
            {else}
                <tr>
                    <td colspan="6" class="text-center">
                        <h3>
                            Você ainda não cadastrou nenhum produto :(
                        </h3>
                    </td>
                </tr>
            {/if}
        </tbody>            
    </table>
</section>