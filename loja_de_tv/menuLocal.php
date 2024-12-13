<?php
    if ($_SESSION["Funcao"] == "administrador"){
?>
<br>
<b>Funcionários</b>
<a href="cadastraFun.php"><input type="button" value="Cadastrar Funcionário" class="botaoMenu"></a>
<a href="listaFun.php"><input type="button" value="Listar/Alterar Funcionários" class="botaoMenu"></a>
<br>
<b>Produtos</b>
<a href="cadastraProduto.php"><input type="button" value="Cadastrar Produtos" class="botaoMenu"></a>
<a href="listaProduto.php"><input type="button" value="Listar/Alterar Produtos" class="botaoMenu"></a>
<br>
<b>Vendas</b>
<a href="listaProdutoVenda.php"><input type="button" value="Listar Produtos" class="botaoMenu"></a>
<a href="verFilaVenda.php"><input type="button" value="Fila de Vendas" class="botaoMenu"></a>
<br>
<b>Relatórios</b>
<a href="relatorioProdutos.php"><input type="button" value="Produtos" class="botaoMenu"></a>
<a href="relatorioFunAtivos.php"><input type="button" value="Funcionários(Ativos)" class="botaoMenu"></a>
<a href="relatorioFunInativos.php"><input type="button" value="Funcionários(Inativos)" class="botaoMenu"></a>
<a href="relatorioVendas.php"><input type="button" value="Vendas" class="botaoMenu"></a>
<?php
    }
    else if ($_SESSION["Funcao"] == "estoquista"){
?>
<br>
<b>Produtos</b>
<a href="cadastraProduto.php"><input type="button" value="Cadastrar Produto" class="botaoMenu"></a>
<a href="listaProduto.php"><input type="button" value="Listar/Alterar Produtos" class="botaoMenu"></a>
<?php
    }
    else if ($_SESSION["Funcao"] == "vendedor"){

?>
<br>
<b>Vendas</b>
<a href="listaProdutoVenda.php"><input type="button" value="Listar Produtos" class="botaoMenu"></a>
<a href="verFilaVenda.php"><input type="button" value="Fila de Vendas" class="botaoMenu"></a>
<?php
    }
?>