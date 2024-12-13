<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inital-scale=1">
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="cabecalho">
		<div class="conteudoCabecalho">
			<h1>TudoTV</h1>
		</div>
	</div>
	<div class="login">
		<form name="formularioLogar" action="logar.php" method="post">
			<h1 align="center">Acesso</h1>
			<br> <input class="botaoLogin" type="text" id="usuario"
				name="login" placeholder="Usuário" required> <br>
			<br> <input class="botaoLogin" type="password" id="senha"
				name="senha" placeholder="Senha" required> <br>
			<br>
			<button class="botaoAcessar">Acessar</button>
		</form>
	</div>
</body>
</html>