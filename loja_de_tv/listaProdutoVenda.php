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
            <div class="produto">
                    <h1 align="center">TELEVISORES</h1>
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $sql_pesquisar  = "SELECT marca_tv,modelo_tv, preco_tv, tamanho_tela_tv, foto_tv,id_tv
                                                      FROM televisor WHERE fila_compra_tv='n'";
                
                $tabela_resultado = mysqli_query($conectar, $sql_pesquisar);

                ?>
                <div class="inserirProduto">
                <?php
                while ($registro = mysqli_fetch_row($tabela_resultado)) {
                    
                    echo    "<div class='elemento'>";
                    echo        "<div class='fotoElemento'>";
                    echo            "<a href='exibeProduto.php?codigo=$registro[5]'><img src='$registro[4]'height='200' width='300'></a>";
                    echo        "</div>";
                    echo        "<div class='textoElemento'>";
                    echo            "<p><b>$registro[0] - $registro[1]</b></p>";
                    echo        "<p>$registro[3] polegadas</p>";
                    echo        "<p>R$ $registro[2]</p>";         
                    echo        "</div>";
                    echo        "<div class='filaVenda'>";
                    echo            "<a class='botaoFilaVenda' href='processaFilaVenda.php?codigo=$registro[5]'><b>Colocar fila de vendas</b></a>";
                    echo        "</div>";
                    echo    "</div>";
                }
                ?>
                </div>
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