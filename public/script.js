function desabilitaBotaoSubmit(form, texto) {
    const btn = form.querySelector('button[type=submit]');
    btn.disabled = true;
    btn.innerText = texto;
}