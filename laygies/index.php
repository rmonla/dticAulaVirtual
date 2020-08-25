<?php 
	// define('URL', '../../');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	define('URL_IMG', URL.'_img/');
	
	$titu = "Lic. en Administración y Gestión en Instituciones de Educación Superior";
	$desc = "Aula Virtual [LAyGIES-Mza]";
	
	$imag = URL_IMG."laygies.jpg";

	$time = 30;
	$dest = "../laygies";

	/**
	 * Hoy comenzamos con el cursado de la licenciatura Nodocente desde las 14.
Este semestre tendremos 4 asignaturas.
Se organizará de la siguiente manera:

Diseño y Gestión en Proyectos y Programas en IES 
[Lun de 14 a 16 Hs.] Claudia RESTTIFO

Seguridad y Salud Laboral - Espacio Electivo 
[Mié de 14 a 15:30 Hs.] Johanna MENDEZ

Legislación y Procedimientos Administrativos 
[Mié de 15:30 a 17 Hs.] Silvia IANCHINA

Metodología de la Investigación 
[Vie de 14 a 16 Hs.] Víctor Oliva

*Miércoles de 14 a 15.30 Johanna Mendez: Espacio Electivo- 

*Miércoles de 15.30 a 17 Silvia Ianchina: 

*Viernes de 14 a 16 Víctor Oliva: Metodología de la Investigación
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
				<div style="width: 90%;">
					<div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">
						<iframe frameborder="0" width="850px" height="900px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5f3ff198089eb30d797127c9" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
					</div>
				</div>	
			</p>
		</body>
	</html>		

HTML;

?>

