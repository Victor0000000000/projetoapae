<?php
session_start();
$curtas= 0;
if ($_SESSION['adm'] == 0) {
    $curtas = "invisivel";
} 

if ($_SESSION['adm'] == 1) {
  $curtas = "";
}
$registro= 0;
if ($_SESSION['adm'] == 0) {
  $registro="invisivel";
} 
if ($_SESSION['adm'] == 1) {
  $registro="";
}


//include ("valida_session_perfil.php");
include ("conexao.php");

if (!isset($_SESSION['cod'])) {
  session_destroy();
  header('Location:index.php');
} 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta name="authors"  content="Victor Augusto Graeff V.  Gustavo Maximiano F. Robson Cechinel J. Marek Marius N. Weslei Machado S.">
<meta name="ttitulo" content="Avaliação Online">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/36b801b814.js" crossorigin="anonymous"></script>
  <title>Curta IFC</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header id="header">
    <a id="logo" href="inicio.php"><img id="img_logo" src="img/apaelogo.png"></a>
    <nav id="nav">
      <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
        <span id="hamburger"></span>
      </button>
      <ul id="menu" role="menu">

        <li>
          <button onclick="myFunction()" class="bot"><i class="fas fa-sun"></i></button>
        </li>

    
       
       <li><a class="link-menu" href="Galeria.php">Calendario</a></li>
        <li><a class="link-menu" href="premiacao.php">Cadastrar documentos</a></li>
     
      
        <li><a class="link-menu" href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
      </ul>
    </nav>
</header>

<div data-slide="slide" class="slide">
    <div class="slide-items">
      <img class="img-slide" src="img/img1.jpeg" alt="Img 1">
      <img class="img-slide" src="img/img2.jpeg" alt="Img 2">
      <img class="img-slide" src="img/img3.jpeg" alt="Img 3">
      <img class="img-slide" src="img/img4.jpeg" alt="Img 4">
    </div>
    <nav class="slide-nav">
      <div class="slide-thumb"></div>
      <button class="slide-prev">Anterior</button>
      <button class="slide-next">Próximo</button>
    </nav>
</div>


<main>
    <div class="conteudo">
      

    </div>
</main>
  
  <footer>

    <div class="logo-rodape">
      <a href="#"><img class="_logo-rodape" src="img/apaelogo.png" alt="Ocorreu um erro no carregamento da imagem"></a>
    </div>

    

    <div class="social-midia">
      <a href="https://www.instagram.com/apae.criciuma?igsh=MW81bjZhNjE0OGZ4cw==" target="_blank"><img class="social" src="img/instagram.png" alt="Ocorreu um erro no carregamento da imagem"></a>
      
    </div>
  </footer>
  <div>
  <script src="index-script.js"></script>
  </div>
    
  


</body>
</html>