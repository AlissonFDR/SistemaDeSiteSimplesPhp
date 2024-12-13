<?php

  $conectar = mysqli_connect ("localhost","root","","lojatv");
  
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
   
   $foto_nome ="img/".$foto["name"];
   move_uploaded_file($foto["tmp_name"], $foto_nome);
   
   $sql_cadastrar = "INSERT INTO televisor (marca_tv,
                     modelo_tv, preco_tv, tipo_tela_tv, foto_tv, resolucao_tv,tamanho_tela_tv, sistema_operacional_tv, processador_tv, voltagem_tv, entradas_tv)
                     VALUES ('$marca','$modelo','$preco','$tipoTela',
                     '$foto_nome','$resolucao','$tamanhoTela','$sistemaOperacional','$processador','$voltagem','$entradas')";
                     
    $resultado_cadrastrar = mysqli_query ($conectar, $sql_cadastrar);
    if ($resultado_cadrastrar == true){
        echo "<script>
        alert ('$modelo, cadastrado com sucesso!')
        </script>";
        
        echo "<script>
        location.href = ('cadastraProduto.php')
        </script>";            
    }else{
        echo "<script>
        alert ('Erro no servidor, tente novamente mais tarde!')
        </script>";
        
        echo "<script>
        location.href = ('cadastraProduto.php')
        </script>";              
        }

