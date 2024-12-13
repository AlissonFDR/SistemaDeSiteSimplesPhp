<?php
   $conectar = mysqli_connect ("localhost","root","","lojatv");
   
   $codigo = $_POST["codigo"];
   $marca = $_POST["marca"];
   $modelo = $_POST["modelo"];
   $preco = $_POST["preco"];
   $tipoTela = $_POST["tipoTela"];
   $foto = $_FILES["foto"];
   $resolucao = $_POST["resolucao"];
   $tamanhoTela = $_POST["tamanhoDeTela"];
   $sistemaOperacional = $_POST["sistemaOperacional"];
   $processador = $_POST["processador"];
   $voltagem = $_POST["voltagem"];
   $entradas = $_POST["entradas"];
   
   
   if($foto["name"]<>""){
    $foto_nome ="img/".$foto["name"];
    move_uploaded_file($foto["tmp_name"], $foto_nome);
   }else{
       $pesquisa_caminho_foto = "SELECT foto_tv FROM televisor WHERE id_tv = '$codigo'";
       $resultado_pesquisa = mysqli_query($conectar, $pesquisa_caminho_foto);
       $registro = mysqli_fetch_row($resultado_pesquisa);
       $foto_nome = $registro[0];
   
   }
    $sql_altera="UPDATE televisor SET marca_tv='$marca',
                     modelo_tv='$modelo', preco_tv='$preco', tipo_tela_tv='$tipoTela', foto_tv='$foto_nome'
           , resolucao_tv='$resolucao',tamanho_tela_tv='$tamanhoTela', sistema_operacional_tv='$sistemaOperacional', processador_tv='$processador'
           , voltagem_tv='$voltagem', entradas_tv='$entradas' WHERE id_tv='$codigo'";
    
    $sql_resultado_alteracao = mysqli_query($conectar,$sql_altera);
   if($sql_resultado_alteracao == true){
        echo "<script> alert ('$modelo alterado com sucesso!')</script>";
        echo "<script> location.href=('listaProduto.php')</script>";
   }else{
        echo "<script> alert ('Ocorreu um erro no servidor! Dados não foram alterados, volte mais tarde')</script>"; 
        echo "<script> location.href=('alteraProduto.php?codigo=$codigo') </script>"; 
   }
  