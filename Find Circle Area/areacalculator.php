<html>
	<head>
		<title> Calculated Area </title>
		<?php // Göktürk Turan 290201096 ?>
	</head>

	<body style="text-align:center" bgcolor="#FFF8DC"><font size="+1">

		<h2 style="text-align:center; text-decoration:underline"> Calculated Area of Circle </h2>
		<b><span style="color:#8B0000; text-decoration:underline">
		<?php
			extract($_REQUEST,EXTR_SKIP);
			if (!empty($_GET['radius'])) {
		
				$area = ($radius**2) * pi();
				print "<b>Area is : <b> $area";
			
			} else {
				print "ERROR, please enter a radius value" ;
			}
		?>
		</span></b>
 	</body>

</html>