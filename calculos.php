<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercício 05</title>
	</head>
	<body>
		<form action="at05.php" method="GET">
			<label>A</label>
			<input type="number" name="a">
			<label>B</label>
			<input type="number" name="b">
			<button type="submit">Enviar</button>
		</form>
		<?php
			$a = @$_GET["a"];
			$b = @$_GET["b"];

			print $a + $b."<br>";
			print $a - $b."<br>";
			print $a * $b."<br>";
			print $a / $b;

		?>

</body>
</html>