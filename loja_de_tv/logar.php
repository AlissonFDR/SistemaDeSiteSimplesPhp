<?php
    session_start();
    $conectar = mysqli_connect ("localhost","root","","lojatv");

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $sql_consulta = "SELECT login, senha, nome, id_funcionarios, funcao
                    FROM funcionarios
                    WHERE
                        login = '$login'
                    AND
                        senha = '$senha'
                    AND
                        status = 'ATIVO' ";

    $resultado_consulta = mysqli_query ($conectar, $sql_consulta);

    $linhas = mysqli_num_rows($resultado_consulta);

    if($linhas == 1){
        $registro = mysqli_fetch_row($resultado_consulta);
        $_SESSION["Nome"] = $registro[2];
        $_SESSION["Codigo"] = $registro[3];
        $_SESSION["Funcao"] = $registro[4];
        echo "<script>
                location.href = ('administracao.php')
              </script>";
    }else{
        echo "<script>
                alert ('Login ou Senha Incorretos! Digite novamente!')
              </script>";
        echo "<script> location.href=('index.php')</script>";
    }
