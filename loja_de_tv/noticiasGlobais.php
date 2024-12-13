<?php
if ($_SESSION["Funcao"] == "administrador") {
?>
    <b>Últimas vendas:</b>
<?php
    $conectar = mysqli_connect("localhost", "root", "", "lojatv");
    $sql_consulta_ultima_venda = "SELECT data_venda, valor_total FROM venda ORDER BY id_venda DESC LIMIT 3";
    $sql_consulta_ultima_add = "SELECT marca_tv, modelo_tv FROM televisor ORDER BY id_tv DESC LIMIT 3";
    $resultado_consulta = mysqli_query($conectar, $sql_consulta_ultima_venda);
    $resultado_consulta2 = mysqli_query($conectar, $sql_consulta_ultima_add);
    
    while ($registro = mysqli_fetch_row($resultado_consulta)) {
        echo "<p>Data: $registro[0], Valor: $registro[1]</p>";

    }
?>
    <p><b>Últimos Produtos Cadastrados:</b></p>
<?php
    while ($registro = mysqli_fetch_row($resultado_consulta2)) {
        echo "<p>Marca: $registro[0], Modelo: $registro[1]</p>";

    }
?>
<?php
}else if ($_SESSION["Funcao"] == "estoquista"){
?>
    <b>Últimos Produtos Cadastrados:</b>
<?php
    $conectar = mysqli_connect("localhost", "root", "", "lojatv");
    $sql_consulta_ultima_add = "SELECT marca_tv, modelo_tv FROM televisor ORDER BY id_tv DESC LIMIT 3";
    $resultado_consulta = mysqli_query($conectar, $sql_consulta_ultima_add);

    while ($registro = mysqli_fetch_row($resultado_consulta)) {
        echo "<p>Marca: $registro[0], Modelo: $registro[1]</p>";

    }
?>
<?php }else if($_SESSION["Funcao"] == "vendedor"){ 
?>
        <b>Últimas vendas:</b>
<?php
    $conectar = mysqli_connect("localhost", "root", "", "lojatv");
    $sql_consulta_ultima_venda = "SELECT data_venda, valor_total FROM venda ORDER BY id_venda DESC LIMIT 3";
    $resultado_consulta = mysqli_query($conectar, $sql_consulta_ultima_venda);

    while ($registro = mysqli_fetch_row($resultado_consulta)) {
        echo "<p>Data: $registro[0], Valor: $registro[1]</p>";

    }
?>
<?php
}
?>

