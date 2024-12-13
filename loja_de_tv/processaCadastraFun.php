<?php

//Conecta banco de dados
$conectar = mysqli_connect("localhost", "root", "", "lojatv");
//                          Servidor,Usuário,Senha,DataBase
//Variaveis
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

//consulta se login existe
$sql_consulta = "SELECT login FROM funcionarios
                    WHERE
                        login = '$login'";

// guarda o resultado da pesquisa tabela
$resultado_consulta = mysqli_query($conectar, $sql_consulta);

//guardas o número de linhas retornada
$linhas = mysqli_num_rows($resultado_consulta);

//teste se existe usuario
if ($linhas == 1) {
    echo "<script>
                alert ('Login já cadastrado. Tente outro!')
              </script>";

    echo "<script>
                location.href = ('cadastraFun.php')
              </script>";
}
// senao insere o funcionario
else {
    $sql_cadastrar = "INSERT INTO funcionarios
                                (nome, email, telefone, endereco, funcao, login, senha, cpf, salario, data_admissao)
                          VALUES
                                ('$nome','$email','$telefone','$endereco','$funcao','$login','$senha','$cpf', '$salario', '$dataAdmissao')";
    // verifica se foi tudo ok
    $resultado_cadrastrar = mysqli_query($conectar, $sql_cadastrar);
    if ($resultado_cadrastrar == true) {
        echo "<script>
                alert ('$nome, cadastrado(a) com sucesso!')
              </script>";

        echo "<script>
                location.href = ('cadastraFun.php')
              </script>";
    } else {
        echo "<script>
                alert ('Erro no servidor, tente novamente mais tarde!')
              </script>";

        echo "<script>
                location.href = ('cadastraFun.php')
              </script>";
    }
}