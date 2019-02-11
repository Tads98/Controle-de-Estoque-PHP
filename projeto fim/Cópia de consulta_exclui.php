<html>
    <head>
      <title> </title>
    </head>
    
    <body>
    
    <form method="post" action="exclui.php">

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


Nome : <input type='text' name='txtnome' value=<?php echo $linha
['nome']?> >
<br>
Categoria : <input type='text' name='txtcategoria' value=<?php echo $linha
['categoria']?> >

<br>
Data : <input type='text' name='txtdata' value=<?php echo $linha
['data']?> > 

<br>
Qtde : <input type='text' name='txtqtde' value=<?php echo $linha
['qtde']?> > 

<br>
<input type='submit' value='Excluir'>    
<?php
   }
   ?>
   </form>
  </body>
</html>
