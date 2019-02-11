<html>
    <head>
      <title> </title>
    </head>
    
    <body>
    
    <form name="form1" action="consulta2.php" method="get">
     
    Nome:
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
   echo "<th>Nome</th>" ;
   echo "<th>Código</th>" ;
   echo "<th>Categoria</th>" ;
   echo "<th>Data</th>" ;
   echo "<th>Qtde</th>" ;
   echo "</tr>" ;

   while ($linha = mssql_fetch_assoc($result)){

    echo "<tr>" ;
     echo "<td width=150 bgcolor=red>" ;
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

    echo "<td>" ;
?>
<a href='consulta_altera.php?cod=<?php echo $linha["codigo"]?>
'>Alterar</a>

<?php
      echo"</td>" ;
      echo"</tr>" ;
    }
   
    echo "</table>" ;
    ?>
</body>
</html>