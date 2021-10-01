<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercício 01 - Funções de String</title>
	</head>
	<body>
		<form action="at01.php" method="POST">
			<label>Seu nome</label>
			<input type="text" name="nome">
			<label>Ano que nasceu</label>
			<input type="number" name="ano_nasc">
			<button type="submit">Enviar</button>
		</form>
		<?php
			$nome = @$_POST["nome"];
			$ano_nasc = @$_POST["ano_nasc"];

			$senha = $nome . $ano_nasc;
			$senha = str_replace(" ", "", $senha);
			$senha = str_shuffle($senha);
			$senha = substr($senha, 0, 10);

			print $senha;
		?>
	</body>
</html>