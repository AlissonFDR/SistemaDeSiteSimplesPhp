<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Exibe Funcionário</title>
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
                <h1> EXIBIÇÃO DE DADOS DE USUÁRIOS </h1>
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $codigo = $_GET["codigo"];

                $sql_pesquisar = "SELECT nome, login, funcao,status, email, endereco,telefone, cpf, salario, data_admissao
                                                    FROM funcionarios WHERE id_funcionarios = '$codigo'";

                $tabela_resultado = mysqli_query($conectar, $sql_pesquisar);

                $registro = mysqli_fetch_row($tabela_resultado);

                echo "<p> Nome: $registro[0]</p>";
                echo "<p> CPF: $registro[7]</p>";
                echo "<p> Login: $registro[1]</p>";
                echo "<p> Função: $registro[2]</p>";
                echo "<p> Status: $registro[3]</p>";
                echo "<p> Email: $registro[4]</p>";
                echo "<p> Endereço: $registro[5]</p>";
                echo "<p> Telefone: $registro[6]</p>";
                echo "<p> Salário: $registro[8]</p>";
                echo "<p> Data da Admissão: $registro[9]</p>";
                ?>
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
