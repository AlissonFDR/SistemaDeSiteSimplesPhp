<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Cadastro Produtos</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="cabecalho">
            <div class="conteudoCabecalho">
                <h1>TudoTV</h1>
                <p align="right"> Olá, <?php include 'validaLogin.php'; ?><a class="sair" href="logout.php"> | Sair </a></p>
            </div>
        </div>
        <div class="menu">
                <div class="conteudoMenu">
                    <div class="tituloMenu">
                        <b>Menu</b>
                    </div>
                    <?php include 'menuLocal.php' ?>
                </div>
        </div>
        <div class="conteudo">
            <div class="conteudoEspecifico">
                <h1> CADASTRO DE TELEVISORES</h1>
                <form method="post" action="processaCadastraProduto.php" enctype="multipart/form-data" >
                    <p> Marca:  <input type="text" name="marca" required> </p>
                    <p> Modelo:  <input type="text" name="modelo" required> </p>
                    <p> Sistema Operacional:  <input type="text" name="sistemaOperacional" required> </p>
                    <p> Processador:  <input type="text" name="processador" required> </p>
                    <p> Entradas:  <input type="text" name="entradas" required> </p>
                    <p> Preço:  <input type="number" step="0.01" min="0.01" name="preco" required> </p>
                    <p> Foto:  <input type="file" name="foto" > </p>
                    <p> 
                        Voltagem:  <select name="voltagem">
                            <option value="110v"> 110v </option>
                            <option value="220v"> 220v </option>
                        </select>
                    </p>
                    <p> 
                        Resolução:  <select name="resolucao">
                            <option value="1280x800"> 1280 x 800 </option>
                            <option value="1920x1080"> 1920 x 1080 </option>
                            <option value="2560x1440"> 2560 x 1440 </option>
                            <option value="3840x2160"> 3840 x 2160 </option>
                            <option value="5120x2880"> 5120 x 2880 </option>
                        </select>
                    </p>
                    <p> 
                        Tamanho de tela:  <select name="tamanhoDeTela">
                            <option value="24"> 24 </option>
                            <option value="29"> 29 </option>
                            <option value="32"> 32 </option>
                            <option value="39"> 39 </option>
                            <option value="40"> 40 </option>
                            <option value="41"> 41 </option>
                            <option value="42"> 42 </option>
                            <option value="43"> 43 </option>
                            <option value="49"> 49 </option>
                            <option value="50"> 50 </option>
                            <option value="55"> 55 </option>
                            <option value="60"> 60 </option> 
                            <option value="70"> 70 </option> 
                        </select>
                    </p>
                    <p> 
                        Tipo de Tela:  <select name="tipoTela">
                            <option value="led"> LED </option>
                            <option value="oled"> OLED </option>
                            <option value="qled"> QLED </option>
                        </select>
                    </p>
                    <p> <input class="botaoConfirmacao" type="submit" value="Cadastrar TV"> </p>								
                </form>
            </div>
    </div>
    <div class="lado">
        <?php include 'noticiasGlobais.php' ?>
    </div>
    <div class="rodape">
        <div class="conteudoRodape">
            <?php include 'rodapeGlobal.php' ?>
        </div>
    </div>
</body>
</html>