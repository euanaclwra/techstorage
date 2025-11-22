{include file="header.tpl"}

<section class="main">
    <a href="/techstorage/public/index.php" class="link-icon">
        <svg viewBox="0 0 24 24" width="20" height="20" focusable="false" role="img" aria-label="Voltar">
            <path d="M15 6 L9 12 L15 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> 
        Voltar       
    </a>
    <h1 class="page-title">
        {$titulo}
    </h1>

    <br>

    {if $erros}
        <div class="alert alert-danger">
            <ul>
                {foreach $erros as $erro}
                    <li>{$erro}</li>
                {/foreach}
            </ul>
        </div>
    {/if}

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">  
                <form action="/techstorage/src/controllers/processa_produto.php" method="post">      
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="{$produto.nome}" required>
                    </div>
                
                    <div class="row">
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="qtd" class="form-label">Quantidade em Estoque</label>
                            <input type="number" id="qtd" name="qtd" class="form-control" value="{$produto.qtd}">
                        </div>
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="codigo" class="form-label">Código de Barras</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" value="{$produto.codigo}">
                        </div>
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="codigo" class="form-label">Custo de Reposição</label>
                            <input type="text" id="custo" name="custo" class="form-control" value="{$produto.custo}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" name="descricao" class="form-control" value="{$produto.descricao}"></textarea>
                    </div>

                    <button class="btn-blue" type="submit">
                        Cadastrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>