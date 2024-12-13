<?php
session_start();
$conectar = mysqli_connect ("localhost","root","","lojatv");
$data = date('Y/m/d');
$cod_fun = $_SESSION['Codigo'];
$totalVenda = $_GET["total"];

$sql_registro_venda = "INSERT INTO venda (data_venda, funcionarios_id_funcionarios, valor_total) VALUES ('$data','$cod_fun',$totalVenda)";

$resultado_registro_venda = mysqli_query($conectar, $sql_registro_venda);

$sql_consulta_ultima_venda = "SELECT id_venda FROM venda ORDER BY id_venda DESC LIMIT 1";

$resultado_consulta = mysqli_query($conectar, $sql_consulta_ultima_venda);

$registro_cod_ven = mysqli_fetch_row($resultado_consulta);

$sql_codigo_venda_em_tele = "UPDATE televisor SET venda_id_venda = '$registro_cod_ven[0]', fila_compra_tv = 'v' WHERE fila_compra_tv = 's'";

$resultado_alteracao_tele = mysqli_query($conectar, $sql_codigo_venda_em_tele);


echo "<script> location.href=('reciboVenda.php?codVenda=$registro_cod_ven[0]')</script>";
