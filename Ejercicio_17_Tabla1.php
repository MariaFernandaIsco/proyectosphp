<!DOCTYPE html>
<html>
<head>
	<title>Tabla condicional</title>
</head>
<body>
	<h1>Tabla condicional</h1>
	<?php
	/*Crearemos una tabla de valores de seno y coseno de 0 a 2 en incremento de 0.01. Los valores negativos que resulten los que queremsoo mostrar en rojo, y los valores positivos en azul*/
	function muestra ($valor){
		if ($valor<0.5) 
			$color="red";
		else
			$color="blue";
		echo "<td><font color='$color'>$valor</font></td>\n";
	}  
	?>
	<table border="1">
	<?php
	for ($x=0; $x<=2; $x+=0.01) { 
		echo "<tr>";
		muestra($x);
		muestra(sin($x));
		muestra(cos($x));
		echo "</tr>";
	}
	?>
</body>
</html>