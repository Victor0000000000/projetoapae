<?php 
require ("conexao.php");?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="login.css">
		<title>Avaliação online</title>
	</head>

		<body>

			<form action="validarlogin.php" method="POST">
				<div class="card2">

					<div>
						<img class="logo" src="img/apaelogo.png">
					</div>
					<br>
						<p class="titulos">Nome</p>
						<input type="text" name="nome" class="campo2" placeholder="Digite seu nome">
					<br>
						
					<br>
						<p class="titulos">Senha</p>
						<input type="password" name="senha" class="campo2" placeholder="Digite sua senha">
					<br><br>
						<p>
							<input type="submit" name="Entrar" class="bot" value="Entrar">
						</p>
				
						<p>
							<a class="link" href="index.php">Ainda não possui cadastro?</a>
						</p>

					<!--	<p>
							<a class="link" href="#">Esqueceu sua senha?</a>
						</p> -->

				</div>
			</form>

		</body>
</html>