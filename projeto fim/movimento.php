<html>
    <head>
      <title> </title>
    </head>
    
    <body>
    
    <form method="post" action="kardex.php">

    <?php
   
    $con = mssql_connect("10.4.0.89","bd006652013","123456") ;
   
    $bco = mssql_select_db("bd006652013" , $con) ;

    $cod = $_REQUEST["cod"];

    $sql = "select * from bd006652013.click where codigo = $cod";
    
    $result = mssql_query( $sql , $con ) ;
    
    while ($linha = mssql_fetch_assoc($result) ) {
    
    echo "Codigo : " . $linha["codigo"] ;
   
    echo "<br>" ;

?>


    
<input type='hidden' name='txtcodigo' value=<?php echo $linha
['codigo']?> >

   


Nome : <?php echo $linha['nome'];?>

<br>

Data:<input type='text' name='txtdata' value=<?php echo $linha
['data']?> >
<br>
    
Tipo:<select name=txttipo>
        <option value="Entrada">Entrada</option>
        <option value="Saida">Saída</option>
      </select>

<br>
Qtde : <input type='text' name='txtqtde'  > 



<br>
<input type='submit' value='Alterar'>    
<?php
   }
   ?>
   </form>
  </body>
</html>
