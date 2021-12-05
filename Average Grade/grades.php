<html>
	<head>
		<?php // Göktürk Turan 290201096 ?>
		<title> User Informations </title>
	</head>
	<body style="text-align:center" bgcolor="#FFF8DC"><font size="+1">
		<h2 style="text-align:center; color:#8B0000; text-decoration:underline"> Grade Calculator </h2>
		<?php 
			extract($_REQUEST,EXTR_SKIP);
			if(is_numeric($_GET['t1']) && is_numeric($_GET['t2']) && is_numeric($_GET['t3'])) {
				if( $_GET['t1'] < 0 || $_GET['t2'] < 0 || $_GET['t3'] < 0) {
					print " Your grades must be between 0 and 100.";
				} else { 
					$average =( $_GET['t1'] + $_GET['t2'] + $_GET['t3'] ) / 3 ;
					if($average >= 90 && $average <=100) {
						print "<h1> $average - A </h1>";
					}
					if($average >= 80 && $average <90) {
						print "<h2> $average - B </h2>";
					}
					if($average >= 70 && $average <80) {
						print "<h3> $average - C </h3>";
					}
					if($average >= 60 && $average <70) {
						print "<h4> $average - D </h4>";
					}
					if($average >= 0 && $average <59) {
						print "<h5> $average - F <font color=red>&nbsp;You need to concentrate!</font></h5>";
					}
				}
			} else {
				print "Please enter your grades as a number.";
			}
		?>
 	</body>
</html>