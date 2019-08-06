<!DOCTYPE html>
<html>
<head>
	<title>Calculos</title>
</head>
<body>
	<h1>Calculos, redondeo y formato.</h1>
	<?php
	$precioneto=101.98;
	$iva=0.196;
	$resultado=$precioneto*$iva;
	echo "El precio neto es de";
	echo $precioneto;
	echo "y el IVA es de";
	echo $iva;
	echo "%<br>";
	echo "resultado:";
	echo round($resultado,2);
	echo "con ROUND()<br>";
	echo $resultado;
	echo "normal\n";
	echo "<br><br>";
	$resultado2=sprintf("%01.2f", $resultado);
	echo "Usando la funcion sprintf se ve asi:";
	echo $resultado2
	?>

</body>
</html>
