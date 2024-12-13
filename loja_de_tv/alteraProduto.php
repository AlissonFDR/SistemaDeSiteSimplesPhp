<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Altera Produtos</title>
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
                <h1> ALTERAÇÃO DE TELEVISORES</h1>
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $codigo = $_GET["codigo"];

                $sql_pesquisar = "SELECT marca_tv,modelo_tv, preco_tv, tipo_tela_tv, resolucao_tv,tamanho_tela_tv, sistema_operacional_tv, processador_tv, voltagem_tv, entradas_tv
                                                      FROM televisor WHERE id_tv = '$codigo'";

                $resultado_pesquisa = mysqli_query($conectar, $sql_pesquisar);
                $registro = mysqli_fetch_row($resultado_pesquisa);
                ?>
                <p>
                <form method="post" action="processaAlteraProduto.php" enctype="multipart/form-data" >
                    <input type="hidden" name="codigo" value="<?php echo $codigo ?>"> 
                    <p> Marca:  <input type="text" name="marca" value="<?php echo $registro[0] ?>" required>   </p>
                    <p> Modelo:  <input type="text" name="modelo" value="<?php echo $registro[1] ?>" required>  </p>
                    <p> Sistema Operacional:  <input type="text" name="sistemaOperacional" value="<?php echo $registro[6] ?>" required> </p>
                    <p> Processador:  <input type="text" name="processador" value="<?php echo $registro[7] ?>" required> </p>
                    <p> Entradas:  <input type="text" name="entradas" value="<?php echo $registro[9] ?>" required> </p>
                    <p> Preço:  <input type="number" step="0.01" min="0.01" name="preco" value="<?php echo $registro[2] ?>" required>   </p>
                    <p> Foto:  <input type="file" name="foto" > </p>
                    <p> 
                        Voltagem:  <select name="voltagem">
                            <option value="110v"
                            <?php
                            if ($registro[8] == "110v") {
                                echo "selected";
                            }
                            ?>
                            > 110v </option>
                            <option value="220v"
                            <?php
                            if ($registro[8] == "220v") {
                                echo "selected";
                            }
                            ?>
                            > 220v </option>
                        </select>
                    </p>
                    <p> 
                        Resolução:  <select name="resolucao">
                            <option value="1280x800"
                            <?php
                            if ($registro[4] == "1280x800") {
                                echo "selected";
                            }
                            ?>
                            > 1280 x 800 </option>
                            <option value="1920x1080"
                            <?php
                            if ($registro[4] == "1920x1080") {
                                echo "selected";
                            }
                            ?>
                            > 1920 x 1080 </option>
                            <option value="2560x1440"
                            <?php
                            if ($registro[4] == "2560x1440") {
                                echo "selected";
                            }
                            ?>        
                            > 2560 x 1440 </option>
                            <option value="3840x2160"
                            <?php
                            if ($registro[4] == "3840x2160") {
                                echo "selected";
                            }
                            ?>        
                            > 3840 x 2160 </option>
                            <option value="5120x2880"
                            <?php
                            if ($registro[4] == "5120x2880") {
                                echo "selected";
                            }
                            ?>        
                            > 5120 x 2880 </option>
                        </select>
                    </p>
                    <p> 
                        Tamanho de tela:  <select name="tamanhoDeTela">
                            <option value="24"
                            <?php
                            if ($registro[5] == "24") {
                                echo "selected";
                            }
                            ?>  
                             > 24 </option>
                            <option value="29"
                            <?php
                            if ($registro[5] == "29") {
                                echo "selected";
                            }
                            ?>         
                            > 29 </option>
                            <option value="32"
                            <?php
                            if ($registro[5] == "32") {
                                echo "selected";
                            }
                            ?>         
                            > 32 </option>
                            <option value="39"
                            <?php
                            if ($registro[5] == "39") {
                                echo "selected";
                            }
                            ?> 
                            > 39 </option>
                            <option value="40"
                            <?php
                            if ($registro[5] == "40") {
                                echo "selected";
                            }
                            ?>         
                            > 40 </option>
                            <option value="41"
                            <?php
                            if ($registro[5] == "41") {
                                echo "selected";
                            }
                            ?>         
                            > 41 </option>
                            <option value="42"
                            <?php
                            if ($registro[5] == "42") {
                                echo "selected";
                            }
                            ?> 
                            > 42 </option>
                            <option value="43"
                            <?php
                            if ($registro[5] == "43") {
                                echo "selected";
                            }
                            ?> 
                            > 43 </option>
                            <option value="49"
                            <?php
                            if ($registro[5] == "49") {
                                echo "selected";
                            }
                            ?> 
                            > 49 </option>
                            <option value="50"
                            <?php
                            if ($registro[5] == "50") {
                                echo "selected";
                            }
                            ?> 
                            > 50 </option>
                            <option value="55"
                            <?php
                            if ($registro[5] == "55") {
                                echo "selected";
                            }
                            ?> 
                            > 55 </option>
                            <option value="60"
                            <?php
                            if ($registro[5] == "60") {
                                echo "selected";
                            }
                            ?> 
                            > 60 </option> 
                            <option value="70"
                            <?php
                            if ($registro[5] == "70") {
                                echo "selected";
                            }
                            ?> 
                            > 70 </option> 
                        </select>
                    </p>
                    <p> 
                        Tipo de Tela:  <select name="tipoTela">
                            <option value="led"
                            <?php
                            if ($registro[3] == "led") {
                                echo "selected";
                            }
                            ?> 
                            > LED </option>
                            <option value="oled"
                            <?php
                            if ($registro[3] == "oled") {
                                echo "selected";
                            }
                            ?>        
                            > OLED </option>
                            <option value="qled"
                            <?php
                            if ($registro[3] == "qled") {
                                echo "selected";
                            }
                            ?>         
                            > QLED </option>
                        </select>
                    </p>
                    <p> <input class="botaoConfirmacao" type="submit" value="Altera TV"> </p>								
                </form>
            </div>
        </p>
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