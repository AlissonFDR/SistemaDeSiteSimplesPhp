<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <title>Adminstração</title>
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
      		<h1 align="center">Bem vindo(a)!</h1>
		<p>Bem vindo(a) ao nosso sistema de gerenciamento, no canto direito temos os conteúdos relacionados
		e no canto esquerdo temos as funcionalidades listadas no menu. Observe as funções disponibilizadas no menu
		e selecione a que você deseja para ser redirecionado para a página em questão.
		</p>
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