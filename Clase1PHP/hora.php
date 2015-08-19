<html>
<head>
 	<title>Ejercicio de Hora</title>
</head>
<body>
		<?php

			if ((date("H") > 0) && (date("H") < 13))
		    {
				echo date("H:i:s a")."<br>Es de Mañana";
			}
		    if ((date("H") > 12) && (date("H") < 20))
		    {
				echo date("H:i:s a")."<br>Es de Tarde";
			}
			if ((date("H") > 19) && (date("H") < 24))
			{
				echo date("H:i:s a")."<br>Es de Noche";
			}
		?>
</body>
</html>