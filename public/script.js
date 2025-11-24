document.getElementById('formProduto').addEventListener('submit', function() {
    const btn = document.getElementById('btnSalvar');
    btn.disabled = true;
    btn.innerText = "Salvando...";
});