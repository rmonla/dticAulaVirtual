<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/laygies/');
	define('URL_IMG', URL.'_img/');
	
	$titu = "GRUPOS [LAyGIES-Mza]";
	$desc = "Grupos y Compañeros de la Licenciatura NoDocente";
	
	$imag = URL_IMG."laygies.jpg";

	$time = 1800;
	$dest = "../grupos";

	http://www.frlr.utn.edu.ar/dtic/aulavirtual/laygies/grupos?test=01

	echo <<<HTML

	<html>
		<head>
			<title>$titu</title>
			<meta name="description"   content="$desc">
			<meta property="og:title"  content="$titu">
			<meta property="og:image"  content="$imag">
			<meta http-equiv="Refresh" content="$time;url=$dest"/>
		</head>
		<body>
			<center>
				<iframe width="100%" height="100%" 
					src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSDGGZmqZUGDt1A3IXBLf490AJMnlNqzeSkKwHDFO2uElKb7lGKHmbAzRyF68NXgOPZkB6hQ_gEEpLN/pubhtml?gid=245913972&amp;single=false&amp;widget=true&amp;headers=false&amp;chrome=false">
					</iframe>
			</center>
		</body>
	</html>		

HTML;

?>

