<?php
   $conectar = mysqli_connect ("localhost","root","","lojatv");
   
   $codigo = $_GET["codigo"];
   
    $sql_altera="UPDATE televisor SET fila_compra_tv='s' WHERE id_tv='$codigo'";
    
    $sql_resultado_alteracao = mysqli_query($conectar,$sql_altera);
    
   if($sql_resultado_alteracao == true){
        echo "<script> alert ('Sucesso, o produdo foi colocado na fila de venda.')</script>";
        echo "<script> location.href=('listaProdutoVenda.php')</script>";
   }else{
        echo "<script> alert ('Ocorreu um erro no servidor! Dados não foram alterados, volte mais tarde.')</script>"; 
        echo "<script> location.href=('listaProdutoVenda.php?codigo=$codigo') </script>"; 
   }
?>
