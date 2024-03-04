<?php
    include_once('conexao.php');
    $Nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $Email = mysqli_real_escape_string($conexao, $_POST['email']);
    $Senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $ConfirmacaoSenha = mysqli_real_escape_string($conexao, $_POST['confirmacaoSenha']);

    if($Senha != $ConfirmacaoSenha){
        echo "As senhas não conferem";
    }
    else{
        $sql = "INSERT INTO cadastro(Nome,Email,Senha) VALUES ('$Nome','$Email','$Senha')";
        $query = mysqli_query($conexao, $sql); 

        if ($query) {
            echo "
                <script>
                    window.alert('Conta criada com sucesso, faça o login!');
                    window.location.replace('index.php');
                </script>
            ";
        } else {
            echo "
                <script>
                    window.alert('Erro ao cadastrar: " . mysqli_error($conexao) . "');
                    window.location.replace('index.php');
                </script>
            ";
        }
        mysqli_close($conexao);
    }
?>