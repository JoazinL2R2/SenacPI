    function abrirModal() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('card').style.display = 'block';
    }

    function fecharModal() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('card').style.display = 'none';
    }



    function validarFormulario() {
        var pais = document.getElementById('country').value;
        var cidade = document.getElementById('inputCidade').value;
        var fotoPais = document.getElementsByName('fotoPais')[0].value;
        var historiaViagem = document.getElementsByName('historiaViagem')[0].value;

        if (pais === "" || cidade === "" || fotoPais === "" || historiaViagem === "") {
            alert("Por favor, preencha todos os campos obrigatórios.");
            return false;
        }

        verificarPalavras();
    }