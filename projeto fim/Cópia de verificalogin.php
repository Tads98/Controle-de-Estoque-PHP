<?php

$usuario=$_REQUEST["txtlogin"];
$senha=$_REQUEST["txtsenha"];

$con=mssql_connect ('10.4.0.89','bd006652013','123456');
$banco=mssql_select_db("bd006652013",$con);

$sql = "select * from bd006652013.usuarios where login='$usuario' and senha='$senha'";

$result=mssql_query($sql,$con);

$linha=mssql_num_rows($result);

if ($linha==0){
  echo "Usuario ou senha invalida <br>";
  echo "<a href='javascript:history.back()'>voltar</a>";
  die();
}else{
  @session_start();
  $_SESSION['nome'] = mssql_result($result,0,"login") ;
  if ($_SESSION['nome']=="Administrador")
     header("Location:admin.html");
  else
     header("Location:geral.php");
}
?>
