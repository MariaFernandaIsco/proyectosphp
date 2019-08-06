<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$numran=rand(1, 100);
	function nrand($numran){
		if ($numran<50) {
			echo "El numero generado es menor a 50: ".$numran;
		}
		else{
			echo "El numero es mayor a 50: ".$numran;
		}
	}
	nrand($numran);
	?>
</body>
</html>