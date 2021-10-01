<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercício 04</title>
	</head>
	<body>
		<form action="at04.php" method="GET">
			<label>A</label>
			<input type="number" name="a">
			<label>B</label>
			<input type="number" name="b">
			<label>C</label>
			<input type="number" name="c">
			<button type="submit">Enviar</button>
		</form>
		<?php
			$a = @$_GET["a"];
			$b = @$_GET["b"];
			$c = @$_GET["c"];

			$total = ($a + $b + $c) / $c;

			print $total;
		?>
	</body>
</html>