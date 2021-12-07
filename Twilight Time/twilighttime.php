<html>
	<head>
		<?php // Göktürk Turan 290201096 ?>
		<title>Twilight Time</title>
	</head>
	<body bgcolor="#FFF8DC"><font size="+2">
		<center><h1 style="color:Black; text-decoration:underline"> Twilight Time </h1></center>
		<center><div style="color:#8B0000"><b><?php
  			echo "Between the dark and the daylight,<br>
				When the night is beginning to lower,<br>
				Comes a pause in the day’s occupation,<br>
				That is known as the children’s hour.";
		?></b></div></center>
		<center><div style="color:#8B0000; font-family:Brush Script MT; font-size:40"><?php 
			echo "—Henry Wordsworth Longfellow";
		?></div><center>
	<br><br>
	<center><b><?php 
		echo date("D d M Y"). ", &nbsp; Izmir Sunset Time: " . date_sunset(time(), SUNFUNCS_RET_STRING, 38.41273, 27.13838, 90, 3);
	?></b></center>
      	<center><img src="twilighttime.jpg" width="700" height="500"/></center>
	</body>
</html>
