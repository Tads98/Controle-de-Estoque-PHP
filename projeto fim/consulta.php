<html>
    <head>
      <title> </title>
    </head>
    
    <body background="fundo.png">

    
    <form name="form1" action="consulta.php" method="post">
    <table border=1 cellpadding=5 cellspacing=0 >
    <tr bgcolor="black"><td> 
   <font color="white"> Nome: </font>
    </tr></td>
    </table>
    <input type="text" name="txtnome">

    <input type="submit" value="Buscar">
    
   </form>


   <?php

   $con = mssql_connect("10.4.0.89","bd006652013","123456") ;

   $bco = mssql_select_db("bd006652013" , $con ) ;

   $nome = isset($_REQUEST["txtnome"])?$_REQUEST["txtnome"]:"";

   
   if ( $nome == "") {
      $sql = "select * from bd006652013.click" ;
   } else {
      $sql = "select * from bd006652013.click where nome like '%$nome%'" ;
   }
   
    
   $result = mssql_query($sql , $con) ;

   echo "<table border=1 cellpadding=5 cellspacing=0>" ;
   
 echo "<tr>" ;
echo "<td>Nome</td>" ;
echo "<td>codigo</td>" ;
echo "<td>categoria</td>" ;
echo "<td>Data</td>" ;
echo "<td>Qtde</td>" ;


echo "</tr>" ;

   while ($linha = mssql_fetch_assoc($result)){

    echo "<tr>" ;
     echo "<td>" ;
       echo $linha["nome"] ;
     echo "</td>" ;

     echo "<td>" ;
       echo $linha["codigo"] ;
     echo "</td>" ;

     echo "<td>" ;
       echo $linha["categoria"] ;
     echo "</td>" ;

     echo "<td>" ;
       echo $linha["data"] ;
     echo "</td>" ;

     echo "<td>" ;
       echo $linha["qtde"] ;
     echo "</td>" ;

    echo "</tr>" ;
  }

  echo "</table>" ;
  ?>

  </body>
  </html>

