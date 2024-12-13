<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>Alteração de funcionários</title>
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
                <h1 align="center"> ALTERAÇÃO DE FUNCIONÁRIOS </h1>
                <?php
                $conectar = mysqli_connect("localhost", "root", "", "lojatv");

                $codigo = $_GET["codigo"];

                $sql_pesquisar = "SELECT nome, email, telefone, endereco, funcao, login, senha, status, cpf, data_admissao, salario
                                                  FROM funcionarios WHERE id_funcionarios = '$codigo'";

                $resultado_pesquisa = mysqli_query($conectar, $sql_pesquisar);

                $registro = mysqli_fetch_row($resultado_pesquisa);
                ?>
                <form method="post" action="processaAlteraFun.php">
                    <input type="hidden" name="codigo" value="<?php echo $codigo ?>"> 
                    <?php
                    if ($registro[4] == "administrador") {
                        ?>
                        <p align="center">
                            <input type="hidden" name="funcao" value="<?php echo $registro[4] ?>"> 
                            Senha:
                            <input type="password" name="senha" value="<?php echo $registro[6] ?>" required>                                                        
                        </p>
                        <?php
                    } else {
                        ?>
                        <table align="center">	
                            <tr>
                                <td>
                                    <p> Nome: </p>
                                </td>
                                <td> 
                                    <p> <input name="nome" type="text" value="<?php echo $registro[0] ?>" required> </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p> CPF: </p>
                                </td>
                                <td> 
                                    <p> <input name="cpf" type="text" placeholder="123.456.789-10" pattern="\d{3}.\d{3}.\d{3}-\d{2}" value="<?php echo $registro[8] ?>" required> </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p> Email: </p>
                                </td>
                                <td> 
                                    <p> <input name="email" type="email" value="<?php echo $registro[1] ?>"> </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p> Telefone: </p>
                                </td>
                                <td> 
                                    <p> <input name="telefone" type="tel" placeholder="(99)99999-9999" pattern="\(\d{2}\)\d{5}-\d{4}" value="<?php echo $registro[2] ?>"> </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p> Endereço: </p>
                                </td>
                                <td> 
                                    <p> <input name="endereco" type="text" value="<?php echo $registro[3] ?>"></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p> Função:  </p>
                                </td>
                                <td>
                                    <p> 
                                        <input name="funcao" type="radio" value="estoquista"
                                        <?php
                                        if ($registro[4] == "estoquista") {
                                            echo "checked";
                                        }
                                        ?>>Estoquista      
                                    <input name="funcao" type="radio" value="vendedor"
                                    <?php
                                        if ($registro[4] == "vendedor") {
                                            echo "checked";
                                        }
                                     ?>> Vendedor  
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p> Salário:  </p>
                            </td>
                            <td>
                                <p> <input name="salario" type="number" step="0.01" min="0" value="<?php echo $registro[10] ?>" required>  </p>
                            </td>	
                        </tr>
                        <tr>
                            <td>
                                <p> Data da Admissão:  </p>
                            </td>
                            <td>
                                <p> <input name="dataAdmissao" type="date" value="<?php echo $registro[9] ?>" required>  </p>
                            </td>	
                        </tr>
                        <tr>
                            <td>
                                <p> Login:  </p>
                            </td>
                            <td>
                                <p> <input name="login" type="text" value="<?php echo $registro[5] ?>" required>  </p>
                            </td>	
                        </tr>
                        <tr>
                            <td>
                                <p> Status:</p>
                            </td> 
                            <td>
                                <p>
                                    <select name="status">
                                            <option value="ATIVO"
                                                    <?php
                                                        if($registro[7]=="ATIVO"){
                                                            echo "selected";
                                                        }
                                                    ?>>ATIVO
                                            </option>
                                            <option value="INATIVO"
                                                    <?php
                                                        if($registro[7]=="INATIVO"){
                                                            echo "selected";
                                                        }
                                                    ?>>INATIVO
                                            </option>
                                    </select>
                                </p>    
                            </td>	
                        </tr>
                        <tr>
                            <td>
                                <p> Senha:  </p>
                            </td>
                            <td>
                                <p> <input name="senha" type="password" value="<?php echo $registro[6] ?>" required>  </p>
                            </td>
                        </tr>
                        <?php
                         }
                         ?>
                        <tr>
                            <td colspan="2">
                                <p align="center"> <input class="botaoConfirmacao" type="submit" value="Alterar Funcionário">  </p>
                            </td>
                        </tr>
                    </table>
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
