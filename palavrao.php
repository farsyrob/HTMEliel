<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercício 02</title>
	</head>
	<body>
		<form action="at02.php" method="POST">
			<label>Digite um comentário</label>
			<textarea name="comentario" rows="4" cols="30"></textarea>
			<button type="submit">Enviar</button>
		</form>
		<?php
			$comentario = @$_POST["comentario"];

			$palavras = array("PQP","merda","FDP");

			$nova_frase = str_replace($palavras, "******", $comentario);

			print $nova_frase;
		?>
	</body>
</html>