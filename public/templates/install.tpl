{include file="header.tpl"}

<section class="main">
    <a href="/techstorage/public/index.php" class="link-icon">
        <svg viewBox="0 0 24 24" width="20" height="20" focusable="false" role="img" aria-label="Voltar">
            <path d="M15 6 L9 12 L15 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> 
        Voltar       
    </a>
    <h1 class="page-title">
        Configuração do Banco de Dados
    </h1>

    <br>

    {if $credencialValida && $credencialValida eq false}
        <div class="alert alert-danger">
            <p>
                Credenciais inválidas.
            </p>
        </div>
    {/if}    

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">  
                <form action="/techstorage/install/install.php" method="post" id="formConexao">      
                    <div class="row">
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="qtd" class="form-label">Host</label>
                            <input type="text" id="hostname" name="hostname" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="codigo" class="form-label">Porta</label>
                            <input type="number" id="port" name="port" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="codigo" class="form-label">Banco de Dados</label>
                            <input type="text" id="database" name="database" class="form-control" value="techstorage" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="qtd" class="form-label">Usuário</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>

                        <div class="col-12 col-sm-6 mb-3">
                            <label for="codigo" class="form-label">Senha</label>
                            <input type="password" id="password" name="password" class="form-control" maxlength="14" required>
                        </div>
                    </div>             

                    <button id="btnConectar" class="btn-blue" type="submit">
                        Conectar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="/techstorage/public/script.js"></script>