<?php
@session_start();
if (@$_SESSION["nome"]=='')
{
   echo "Voc� n�o tem permiss�o <br>";
   echo "<a href='login.html'>voltar</a>";
   die();
}
?>


<html>
<head><title>Menu Geral</title></head>

<body background=game.png>

  <h1>Menu Geral - Cadastro de Amigos</h1>

  <br><br><br>

  <a href='aula4.html'>Inclus�o de Dados </a>
  <br>

  <a href='consulta.php'>Consulta de Dados </a>
  <br>

  <a href='consultaaletra.php'>Altera��o de Dados </a>
  <br>

  <a href='consulta3.php'>Exclus�o de Dados </a>
  <br>
  
</body>
</html>