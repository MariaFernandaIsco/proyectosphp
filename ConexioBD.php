<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conecion BD MySQL</title>
</head>
<body>
	<?php
		$ usuario  =  " root " ;
		$ contraseña  =  "1234" ;
		$ servidor  =  " localhost " ;
		$ basededatos  =  " empresa " ;

		$ conexion  =  mysqli_connect ( $ servidor , $ usuario , "1234" ) o  die ( " No se encontro la Base de datos " );
		
		$ db  =  mysqli_select_db ( $ conexion , $ basededatos ) o  die ( " El servicio no puede encontrar la Base de datos " );
	
		$ consulta  =  " SELECT  *  FROM emprea " ;
		$ resultado  =  mysqli_query ( $ conexion , $ consulta ) o  die ( " Esta mal hecha la consulta" );
		
		echo  " <table borde = '2'> " ;
		echo  " <tr> " ;
		echo  " <th> Nombre </th> " ;
		echo  " <th> Apellido </th> " ;
		echo  " </tr> " ;
		
		while ( $ columna  =  mysqli_fetch_array ( $ resultado ))
		{
			echo  " <tr> " ;
			echo  " <td> "  .  $ columna [ ' nombre ' ] .  " </td> <td> "  .  $ columna [ ' apellido ' ] .  " </td> " ;
			echo  " </tr> " ;
		}
		
		echo  " </table> " ; 
		mysqli_close ( $ conexion );
	?>
</body>
</html>