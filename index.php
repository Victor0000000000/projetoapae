<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="cadastro.css">
		<title>Avaliação Online</title>

	</head>

		<body> 
			

				<form action="salvar.php" method="POST">

		
					<div class="card">
						<div>
						<img class="logo" src="img/logopng.png">
						</div>
						<br>
							<p class="titulos">Digite seu nome</p>
							<input type="text" name="nome" class="campo" placeholder="Digite seu nome" required="text">

							<p class="titulos">Senha</p>
							<input type="password" name="senha" class="campo" placeholder="Digite uma senha" required="password">
							
						
            			<br>

					
            			<br><br>
            					<p><input type="submit" name="enviar" class="res" value="Registrar"></p>
            		
            				<p class="link">
                			<a class="link" href="login.php">Já possui cadastro?</a>
           					


					</div>

				</form>

		</body>
</html>