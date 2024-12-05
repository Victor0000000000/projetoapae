<?php 
require "conexao.php";

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	
	
	

		$sql = "INSERT INTO usuarios (nome, senha) values ('$nome', '$senha')"; 

mysqli_query($conn, $sql); // envia para o banco de dados
?>"<script type='text/javascript'>alert('Usuário cadastrado!');</script>";
<?php header('location: inicio.php');

?>