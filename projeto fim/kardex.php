<?php
$codigo       =  $_REQUEST["txtcodigo"];
$nome         =  $_REQUEST["txtnome"];
$tipo   =  $_REQUEST["txttipo"];
$data         =  $_REQUEST["txtdata"];
$qtde  =  $_REQUEST["txtqtde"];


$con = mssql_connect('10.4.0.89','bd006652013','123456');
$bd = mssql_select_db('bd006652013',$con);

$sql = "insert into bd006652013.kardex (nome, codigo, tipo, qtde, data) values ('$nome', $codigo, '$tipo', $qtde, getdate())";

$result = mssql_query($sql,$con);

if ($tipo=='Entrada')
{
    $sql1 = "update bd006652013.click set qtde=qtde+$qtde where codigo = $codigo";
}else{
    $sql1 = "update bd006652013.click set qtde=qtde-$qtde where codigo = $codigo";
}
$result = mssql_query($sql1,$con);

echo "seus dados foram alterados com sucesso !!! <br>";

echo "<a href='ficha.php'>Voltar</a>";
?>