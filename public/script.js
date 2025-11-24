const formProduto = document.getElementById('formProduto');
const formConexao = document.getElementById('formConexao');

if (formProduto) {
    formProduto.addEventListener('submit', function() {
        const btn = document.getElementById('btnSalvar');
        btn.disabled = true;
        btn.innerText = "Salvando...";
    });    
}

if (formConexao) {
    formConexao.addEventListener('submit', function() {
        const btn = document.getElementById('btnConectar');
        btn.disabled = true;
        btn.innerText = "Conectando...";
    });        
}