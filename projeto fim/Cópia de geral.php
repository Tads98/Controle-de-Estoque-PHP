<?php
@session_start();
if (@$_SESSION["nome"]=='')
{
   echo "Você não tem permissão <br>";
   echo "<a href='login.html'>voltar</a>";
   die();
}
?>


<html>
<head><title>Menu Geral</title></head>

<body background=game.png>

  <h1>Menu Geral - Cadastro de Amigos</h1>

  <br><br><br>

  <a href='aula4.html'>Inclusão de Dados </a>
  <br>

  <a href='consulta.php'>Consulta de Dados </a>
  <br>

  <a href='consultaaletra.php'>Alteração de Dados </a>
  <br>

  <a href='consulta3.php'>Exclusão de Dados </a>
  <br>
  
</body>
</html>