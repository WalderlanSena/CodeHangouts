<?php

include_once "../class/UsuariosModel.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$Logar = new UsuariosModel();;

$Logar->newLogin(
    array(
        "login" => $login,
        "senha" => $senha
    )
);
