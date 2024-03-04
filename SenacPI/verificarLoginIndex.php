<?php
session_start();

if (!isset($_SESSION['Email'])) {
    echo json_encode(array('status' => 'nao_logado'));
    exit();
} else {
    echo json_encode(array('status' => 'logado'));
    exit();
}
?>