<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Relatório de Produtos</title>
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
               	<h1> RELATÓRIO DE PRODUTOS</h1>
                <?php
                $situacao = "ERRO";
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $sql_pesquisar = "SELECT id_tv,marca_tv,
                     modelo_tv, preco_tv FROM televisor WHERE fila_compra_tv='n'";

                $sql_resultado = mysqli_query($conectar, $sql_pesquisar);
                ?>
                <table width="100%">
                    <tr height="50px">
                        <td>
                            MARCA
                        </td>
                        <td>
                            MODELO
                        </td>
                        <td>
                            SITUAÇÃO
                        </td>
                        <td>
                            PREÇO
                        </td>     
                    </tr>
                    <?php
                    while ($registro = mysqli_fetch_row($sql_resultado)) {
                            $situacao = "EM ESTOQUE";
                        ?>

                        <tr height="50px">
                            <td>
                                <?php echo $registro[1]; ?>
                            </td>
                            <td>
                                    <?php echo $registro[2]; ?>
                            </td>
                            <td>
                                <?php echo $situacao; ?>
                            </td>
                            <td>
                                <?php echo $registro[3]; ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>  
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