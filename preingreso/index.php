<?php 
	$titu = "Seminario - Ingreso 2021 - UTNLaRioja";
	$desc = "Acceso Zoom - Destinado a Alumnos Ingresantes.";
	
	$imag = "http://www.frlr.utn.edu.ar/dtic/_img/logo-utnlr-dtic-2.png";
	$time = 1;
	$dest = "https://utn.zoom.us/j/97478835879";

	/**
	 * 

		link -> http://www.frlr.utn.edu.ar/dtic/aulavirtual/preingreso/

UTNLaRioja le está invitando a una reunión de Zoom programada.

Tema: _*Seminario - Ingreso 2021 - UTNLaRioja*_
Horario: _3 de Ago 2020 19Hs_

Unirse a la reunión Zoom:
http://www.frlr.utn.edu.ar/dtic/aulavirtual/preingreso

	 */

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
			<p>
				Redirección automática en $time segundos o puedes acceder haciendo click <a href="$dest">aquí</a>
			</p>
			<p>
				<a href="$dest"><img src="$imag" alt="$desc" width="400"></a>
			</p>
		</body>
	</html>		

HTML;

?>

