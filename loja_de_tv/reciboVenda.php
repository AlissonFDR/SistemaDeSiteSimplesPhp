<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Recibo</title>
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
                <h1 align="center">RECIBO</h1>
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");
                $codVenda = $_GET['codVenda'];
                $dataExibicao = date('d/m/y');

                $sql_consulta_recibo = "SELECT marca_tv,modelo_tv, preco_tv, tamanho_tela_tv FROM televisor WHERE venda_id_venda = '$codVenda'";

                $resultado_consulta = mysqli_query($conectar, $sql_consulta_recibo);
                echo "<p> Venda n°: $codVenda</p>";
                echo "<p>Data: $dataExibicao</p>";
                ?>
                <table width="100%">
                    <tr>
                        <td>
                            <p>Marca</p>
                        </td>
                        <td>
                            <p>Modelo</p>
                        </td>
                        <td>
                            <p>Tamanho da Tela</p>
                        </td>
                        <td>
                            <p>Preço</p>
                        </td>
                    </tr>
                    <?php
                    $valor_total = 0;
                    while ($registro = mysqli_fetch_row($resultado_consulta)) {
                        ?>
                        <tr>
                            <td>
                                <p>
                                    <?php echo "$registro[0]"; ?>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <?php echo "$registro[1]"; ?>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <?php echo "$registro[3]"; ?>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <?php echo "$registro[2]";
                                    $valor_total = $valor_total + $registro[2]
                                    ?>

                                </p>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <p> Total: <?php echo $valor_total; ?>

                <p> <a href="listaProdutoVenda.php"> Fechar recibo </a> </p>
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