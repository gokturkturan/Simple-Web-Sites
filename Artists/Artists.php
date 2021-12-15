<html>
	<head>
		<?php // Göktürk Turan 290201096 ?>
		<title> Artists </title>
	</head>
	<body bgcolor="#FFF8DC"><center>
		<h3 style="color:0462B5"><u> Sign Up </u></h3>
 		<form action="?" method="POST">
 		<p style="text-align:center">
			<b>Enter name:</b>
 			<input required="required" type="text" size=30 name="name">
 			<p/><b>Select Items: </b>
			<select name="artists[]" multiple="multiple"> <option value="monet"/> Monet </option>
 						<option value="vangogh" /> Van Gogh </option>
 						<option value="sisley" /> Sisley </option>
 						<option value="cezanne" />Cezanne </option>
						<option value="renoir" />Renoir </option>
 			</select>
			<br><br>
			(Shift+Right Mouse) for multiple selection
			<br><br>
			<input type=submit value="Save">
 			<input type=reset value="Clean">
		</p>
 		</form>
	</body>
</html>

<?php

if(isset($_POST['artists'])) 
{
  $aArtists = $_POST['artists'];
  
  if(!isset($aArtists)) 
  {
    echo("<p>You didn't select any Artists!</p>");
  } 
  else 
  {
    $nArtists = count($aArtists);
    
    echo("<p>You selected $nArtists Artists: <br>");
    for($i=0; $i < $nArtists; $i++)
    {
      if($aArtists[$i] == "monet") {
		echo 'Monet <img src="monet.jpg"><br>';
	}
	if($aArtists[$i] == "vangogh") {
		echo 'Van Gogh <img src="vangogh.jpg"><br>';
	}
	if($aArtists[$i] == "sisley") {
		echo 'Sisley <img src="sisley.jpg"><br>';
	}
	if($aArtists[$i] == "cezanne") {
		echo 'Cezanne <img src="cezanne.jpg"><br>';
	}
	if($aArtists[$i] == "renoir") {
		echo 'Renoir <img src="renoir.jpg"><br>';
	}
    }
    echo("</p>");
  }
}

?>