<?php
session_start();

$usuario_digitado = $_POST['email'];
$senha_digitada = $_POST['senha'];

include('conexao.php');

$query = "SELECT Email, Senha FROM cadastro WHERE Email = '$usuario_digitado' AND Senha = '$senha_digitada'";
$resultado = $conexao->query($query);

if ($resultado && $resultado->num_rows > 0) {
    $_SESSION['Email'] = $usuario_digitado;
    echo json_encode(array('status' => 'autenticado'));
} else {
    echo json_encode(array('status' => 'invalido'));
}

$conexao->close();
?>

