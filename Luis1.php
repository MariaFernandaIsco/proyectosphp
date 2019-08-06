<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	 		<input type="text" name="numero1">
	 		<input type="text" name="numero2">
	 		<button type="submit">Enviar</button>
	 	</form>
	<?php 
		$num1= $_POST['numero1'];
		$num2= $_POST['numero2'];

		function suma($num1,$num2){
			$resultado=$num1+$num2;
			
			return $resultado;
		}
		 if(isset($_POST['numero1']) && $_POST['numero1']!="" && isset($_POST['numero2']) && $_POST['numero2']!="" ){
		 	echo "El resultado de la suma es: ".suma($num1,$num2);
		 }
	 ?>

	
</body>
</html>