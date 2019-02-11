<html>
    <head>
      <title> </title>
    </head>
    
    <body>
    
    <form name="form1" action="consulta_kardex.php" method="post">
     
    Nome:
    <input type="text" name="txtnome">

    <input type="submit" value="Buscar">
    
   </form>


   <?php

   $con = mssql_connect("10.4.0.89","bd006652013","123456") ;

   $bco = mssql_select_db("bd006652013" , $con ) ;

   $nome = isset($_REQUEST["txtnome"])?$_REQUEST["txtnome"]:"";

   
   if ( $nome == "") {
      $sql = "select * from bd006652013.kardex" ;
   } else {
      $sql = "select * from bd006652013.kardex where nome like '%$nome%'" ;
   }
   
    
   $result = mssql_query($sql , $con) ;

   echo "<table border=1 cellpadding=5 cellspacing=0>" ;

 echo "<tr>" ;
echo "<td>Nome</td>" ;
echo "<td>codigo</td>" ;
echo "<td>Tipo</td>" ;
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
       echo $linha["tipo"] ;
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

