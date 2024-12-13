<?php

$conectar = mysqli_connect("localhost", "root", "", "lojatv");
$codigo = $_POST["codigo"];
$funcao = $_POST["funcao"];

if ($funcao == "administrador") {
    $senha = $_POST["senha"];
    $sql_altera = "UPDATE funcionarios SET senha='$senha'
                      WHERE id_funcionarios='$codigo'";
    $sql_resultado_alteracao = mysqli_query($conectar, $sql_altera);

    if ($sql_resultado_alteracao == true) {
        echo "<script> alert ('Senha do administrador alterada com sucesso!')</script>";
        echo "<script> location.href=('listaFun.php') </script>";
    } else {
        echo "<script> alert ('Ocorreu um erro no servidor! A senha não foi alterardo, volte mais tarde')</script>";
        echo "<script> location.href=('alteraFun.php?codigo=$codigo') </script>";
    }
}else {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $salario = $_POST["salario"];
    $dataAdmissao = $_POST["dataAdmissao"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $funcao = $_POST["funcao"];
    $status =  $_POST["status"];

    $sql_pesquisa = "SELECT login FROM funcionarios
                      WHERE login='$login' AND id_funcionarios <> $codigo";

    $sql_resultado = mysqli_query($conectar, $sql_pesquisa);
    $linhas = mysqli_num_rows($sql_resultado);
    if ($linhas == 1) {
        echo "<script> alert ('Login do funcionário já existe, tente novamente')</script>";
        echo "<script> location.href=('altera_fun.php') </script>";
    } else {
        $sql_altera = "UPDATE funcionarios SET nome='$nome',funcao='$funcao',login='$login',
                           senha='$senha', status='$status',telefone='$telefone',email='$email', endereco='$endereco',cpf='$cpf', salario='$salario',data_admissao='$dataAdmissao'
                           WHERE id_funcionarios='$codigo'";
        $sql_resultado_alteracao = mysqli_query($conectar, $sql_altera);
        if ($sql_resultado_alteracao == true) {
            echo "<script> alert ('$nome alterado(a) com sucesso!')</script>";
            echo "<script> location.href=('listaFun.php')</script>";
        } else {
            echo "<script> alert ('Ocorreu um erro no servidor! Dados do funcionário não foram alterados, volte mais tarde')</script>";
            echo "<script> location.href=('alteraFun.php?codigo=$codigo') </script>";
        }
    }
}
