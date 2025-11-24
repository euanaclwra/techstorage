document.getElementById('formProduto').addEventListener('submit', function() {
    const btn = document.getElementById('btnSalvar');
    btn.disabled = true;
    btn.innerText = "Salvando...";
});

document.getElementById('formConexao').addEventListener('submit', function() {
    const btn = document.getElementById('btnConectar');
    btn.disabled = true;
    btn.innerText = "Conectando...";
});