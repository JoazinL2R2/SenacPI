function openModal() {
    closeModal();
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('modal').style.display = 'block';
}
function openModalCadastro(){
    closeModal();
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('modalCadastro').style.display = 'block';
}
function closeModal() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('modal').style.display = 'none';
    document.getElementById('modalCadastro').style.display = 'none';
}

function verificarSessao() {
    $.get('verificarLoginIndex.php', function(resposta) {
        if (resposta.status === 'nao_logado') {
            openModal();
        } else {
            window.location.href = 'DicasDeViagens.php';
        }
    }, 'json');
}
function verificarLogin() {
    $.post('Login.php', { email: $('#email').val(), senha: $('#senha').val() }, function(resposta) {
        if (resposta.status === 'autenticado') {
            window.location.href = 'DicasDeViagens.php';
        }
        if (resposta.status === 'nao_encontrado') {
            $('#mensagemErro').text('Cadastro inexistente. Cadastre-se e tente novamente.');
            abrirModal();
        } else {
            $('#mensagemErro').text('Credenciais inválidas. Tente novamente.');
            abrirModal();
        }
    }, 'json');
}