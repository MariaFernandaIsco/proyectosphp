<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de operaciones de comparacion</title>
</head>
<body>
	<h1>Ejemplo de operaciones de comparacion en  Php</h1>
	<?php
	$a=8;
	$b=3;
	$c=3;

	echo "Variables: <br> a=$a <br> b=$b <br> c=$c <br>";

	echo "comparacion de igualdad entre a y b: ",$a==$b, "<br>";

	echo "comparacion de diferencia entre a y b: ", $a!=$b, "<br>";

	echo "comparacion de menor que entre b y c: ", $b<$c, "<br>";

	echo "comparacion de mayor que entre a y c: ", $a>$c, "<br>";

	echo "comparacion de menor o igual que entre b y c: ", $b<=$c, "<br>";

	echo "comparacion de mayor o igual que entre a y b: ", $a>=$b, "<br>";

	?>
</body>
</html>