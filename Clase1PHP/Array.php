
<html>
	<head>
		<title>Ejercicio de Array</title>
	</head>
	 	<body>
   			<?php

				$colores = array("Rojo","Azul","Verde","Amarillo","Violeta");

				 

				foreach ($colores as $valor)
				{					
				   switch ($valor)
				   {
				   		case 'Rojo':
				   			echo "<font color='red'>$valor</font><br>";
				   			break;
				   		case 'Azul':
				   			echo "<font color='blue'>$valor</font><br>";
				   			break;
				   		case 'Verde':
				   			echo "<font color='green'>$valor</font><br>";
				   			break;
				   		case 'Amarillo':
				   			echo "<font color='yellow'>$valor</font><br>";
				   			break;
				   		case 'Violeta':
				   			echo "<font color='violet'>$valor</font><br>";
				   			break;
				  }	
				}
			?>
     	</body>
</html>