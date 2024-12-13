<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Cadastro de funcionários</title>
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
                <h1 align="center"> CADASTRO DE FUNCIONÁRIOS </h1>
                <form method="post" action="processaCadastraFun.php">
                    <p> Nome: <input name="nome" type="text" required> </p>
                    <p> CPF: <input name="cpf" type="text" placeholder="123.456.789-10" pattern="\d{3}.\d{3}.\d{3}-\d{2}" required></p>
                    <p> Email: <input name="email" type="email"> </p>
                    <p> Telefone: <input name="telefone" type="tel" placeholder="(99)99999-9999" pattern="\(\d{2}\)\d{5}-\d{4}"> </p>
                    <p> Endereço:<input name="endereco" type="text" required> </p>
                    <p> Função:  <input name="funcao" type="radio" value="estoquista" checked> Estoquista
                        <input name="funcao" type="radio" value="vendedor"> Vendedor 
                    </p>
                    <p> Salário:<input name="salario" type="number" step="0.01" min="0" required> </p>
                    <p> Data da Admissão:<input name="dataAdmissao" type="date" required> </p>
                    <p> Login: <input name="login" type="text" required></p>
                    <p> Senha: <input name="senha" type="password" required></p>
                    <p> <input class="botaoConfirmacao" type="submit" value="Cadastrar Funcionário">  </p>
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
