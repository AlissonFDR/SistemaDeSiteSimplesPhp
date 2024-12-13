<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Lista de funcionários</title>
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
                <h1>FUNCIONÁRIOS</h1>
                    <a align="right" href="cadastraFun.php">
                        Cadastro de funcionários
                    </a>				
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $sql_pesquisar = "SELECT nome,funcao,status,id_funcionarios, salario, data_admissao FROM funcionarios";

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
                        <td>
                            SALÁRIO
                        </td>
                        <td>
                            DATA DE ADMISSÃO
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
                                <a href="exibeFun.php?codigo=<?php echo $registro[3]; ?>">
                                    <?php echo $registro[0]; ?></a>
                            </td>
                            <td>
                                <?php echo $registro[1]; ?>
                            </td>
                            <td>
                                <?php echo $registro[2]; ?>
                            </td>
                            <td>
                                <?php echo $registro[4]; ?>
                            </td>
                            <td>
                                <?php echo $registro[5]; ?>
                            </td>
                            <td>
                                <a href="alteraFun.php?codigo=<?php echo $registro[3]; ?>">
                                    <input class="botaoAlterar" type="button" value="Alterar">
                                </a>
                            </td>
                        </tr>
                    <?php
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
