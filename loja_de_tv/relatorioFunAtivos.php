<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Relatório de funcionários</title>
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
                <h1>RELATÓRIO DE FUNCIONÁRIOS ATIVOS</h1>				
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $sql_pesquisar = "SELECT nome,funcao,status,id_funcionarios FROM funcionarios WHERE status='ATIVO'";

                $sql_resultado = mysqli_query($conectar, $sql_pesquisar);
                ?>
                <table width="100%">
                    <tr height="50px">
                        <td>
                            NOME
                        </td>
                        <td>
                            FUNÇÃO
                        </td>
                        <td>
                            STATUS
                        </td>
                    </tr>
                    <?php
                    while ($registro = mysqli_fetch_row($sql_resultado)) {
                        if($_SESSION["Funcao"] == "gerente" && $registro[1]=="administrador"){
                            
                        }else{
                    ?>
                        <tr height="50px">
                            <td>
                                    <?php echo $registro[0]; ?>
                            </td>
                            <td>
                                <?php echo $registro[1]; ?>
                            </td>
                            <td>
                                <?php echo $registro[2]; ?>
                            </td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                </table>

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

