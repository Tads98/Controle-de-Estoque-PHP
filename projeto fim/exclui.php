<?php
$codigo       =  $_REQUEST["txtcodigo"];
$nome         =  $_REQUEST["txtnome"];
$categoria    =  $_REQUEST["txtcategoria"];
$data         =  $_REQUEST["txtdata"];
$qtde  =  $_REQUEST["txtqtde"];


$con = mssql_connect('10.4.0.89','bd006652013','123456');
$bd = mssql_select_db('bd006652013',$con);

$sql = "delete bd006652013.click where codigo = $codigo";

$result = mssql_query($sql,$con);

echo "seus dados foram alterados com sucesso !!! <br>";

echo "<a href='consulta3.php'>Voltar</a>";
?>