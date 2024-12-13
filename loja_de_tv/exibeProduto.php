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
            <div class="conteudoEspecifico">
                <h1 align="center"> EXIBE TELEVISOR</h1>
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $codigo = $_GET["codigo"];

                $sql_pesquisar = "SELECT marca_tv,modelo_tv, preco_tv, tipo_tela_tv, resolucao_tv,tamanho_tela_tv, foto_tv, sistema_operacional_tv, processador_tv, voltagem_tv, entradas_tv
                                                      FROM televisor WHERE id_tv = '$codigo'";

                $tabela_resultado = mysqli_query($conectar, $sql_pesquisar);

                $registro = mysqli_fetch_row($tabela_resultado);
                ?>
                <p><img src="<?php echo $registro[6]; ?>"</p>
                <?php
                echo "<p> Marca: $registro[0]</p>";
                echo "<p> Modelo: $registro[1]</p>";
                echo "<p> Tipo de Tela: $registro[3]</p>";
                echo "<p> Resolução: $registro[4]</p>";
                echo "<p> Tamanho Tela: $registro[5] polegadas</p>";
                echo "<p> Sistema Operacional: $registro[7]</p>";
                echo "<p> Processador: $registro[8]</p>";
                echo "<p> Voltagem: $registro[9]</p>";
                echo "<p> Entradas: $registro[10]</p>";
                echo "<p> Preço: $registro[2]</p>";
                ?>
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
