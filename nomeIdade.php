<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercício 03 - Funções de String</title>
	</head>
	<body>
		<form action="at03.php" method="POST">
			<label>Seu nome</label>
			<input type="text" name="nome">
			<label>Ano que nasceu</label>
			<input type="number" name="ano_nasc">
			<button type="submit">Enviar</button>
		</form>
		<?php
			$nome = @$_POST["nome"];
			$ano_nasc = @$_POST["ano_nasc"];
			$idade = date("Y") - $ano_nasc;

			print "Meu nome é ".$nome." e tenho ".$idade." anos";

		?>
	</body>
</html>