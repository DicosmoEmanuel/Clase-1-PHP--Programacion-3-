<html>
<head>
	<title>Ejercio de las Estaciones</title>
</head>
<body>
	<?php 

	if (date("m") > 8 && date("m") < 13)
    {
		echo "Estamos en primavera";
	}
	if (date("m") > 5 && date("m") < 10) 
	{
		if(date("d") < 21 && date("m") == 6) 
		{
			break;		
		}
	    if(date("d") > 20 && date("m") == 9)
        {
			break;
		}
		echo "Estamos invierno";
	}

?>
</body>
</html>