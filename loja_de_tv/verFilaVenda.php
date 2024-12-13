<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Fila de Venda</title>
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
               	<h1> FILA DE VENDA </h1>
                <?php
                $total=0;
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $sql_pesquisar = "SELECT id_tv, marca_tv,
                     modelo_tv, preco_tv, tipo_tela_tv, resolucao_tv, tamanho_tela_tv FROM televisor WHERE fila_compra_tv='s'";

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
                            TIPO DE TELA
                        </td>
                        <td>
                            RESOLUÇÃO
                        </td>
                        <td>
                            TAMANHO TELA
                        </td>
                        <td>
                            PREÇO
                        </td>     
                        <td>
                            AÇÃO
                        </td>
                    </tr>
                    <?php
                    while ($registro = mysqli_fetch_row($sql_resultado)) {
                        ?>

                        <tr height="50px">
                            <td>
                                <?php echo $registro[1]; ?>
                            </td>
                            <td>
                                <a href="exibeProduto.php?codigo=<?php echo $registro[0]; ?>">
                                    <?php echo $registro[2]; ?>
                                </a>
                            </td>
                            <td>
                                <?php echo $registro[4]; ?>
                            </td>
                            <td>
                                <?php echo $registro[5]; ?>
                            </td>
                            <td>
                                <?php echo $registro[6]; ?>
                            </td>
                            <td>
                                <?php echo $registro[3];
                                $total = $total+$registro[3];?>
                            </td>
                            <td>
                                <a href="processaRetiraFilaVenda.php?codigo=<?php echo $registro[0]; ?>">
                                    <input class="botaoCancelamento" type="button" value="Retirar">
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>  
                <p>Total = <?php echo $total; ?></p>
                <p> <a href="listaProdutoVenda.php"><input class="botaoAlterar" type="button" value="Voltar a seleção de Televisores"></a> </p>
                <p> <a <?php if($total>0){?> href="processaRecibo.php?total=<?php echo $total;?>"<?php }else{?>href="verFilaVenda.php"<?php }?>><input class="botaoConfirmacao" type="button" value="Finalizar venda"></a></p>
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