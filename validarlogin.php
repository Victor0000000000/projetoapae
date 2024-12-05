<?php
// conecta o banco de dados
require "conexao.php";

// login 
// inicia a sessão

ob_start();
@session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios where nome ='{$nome}' AND senha ='{$senha}'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);

if (!empty($row)) { // se existe o usuario
    $_SESSION['cod'] = $row['cod']; // código do usuário
    $_SESSION['adm'] = $row['adm'];
    header('Location:inicio.php');
} else { // se nao exite o usuario
    unset($_SESSION['cod']);
    header('Location: login.php');
}

?>