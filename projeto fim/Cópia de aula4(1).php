<?php

// criando e atribuindo valores para as variáveis
$nome     =  $_REQUEST["txtnome"];
$Codigo    =  $_REQUEST["txcodigo"];
$Categoria =  $_REQUEST["txtcategoria"];
$Data =  $_REQUEST["txtdata"];
$Qtde = $_REQUEST["txtqtde"];

//criando a conexão com o banco de dados (ip,usuario,senha)
$con = mssql_connect('10.4.0.89','bd006652013','123456');

//selecionando o banco de dados
$bd = mssql_select_db('bd006652013',$con);

//comando para executar a inclusão no banco de dados
$sql = "insert into bd006652013.click values ('$nome', $Codigo,'$Categoria','$Data',$Qtde)";

// executar o insert no banco de dados
$result = mssql_query($sql,$con);

echo "cadastro feito com sucesso !!! <br>";

echo "<a href='aula4.html'>Voltar</a>";


?>