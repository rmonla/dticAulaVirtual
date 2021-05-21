<?php 
	header('Content-Type: text/html; charset=utf-8');

	$titu = "INSCRIPCIÓN - GAIA.0603 - UTNLaRioja 2021";
	$desc = "COMPOSTAJE COMO PRIMERA ETAPA DE LA SEPARACIÓN DE RESIDUOS EN ORIGEN";

	define('SITIO', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	define('URL', SITIO.'21/cursos/exceln1/aula');
	
	
	$imag = SITIO."_imgs/logoUTNLR-Mini.png";

	$time = 1800;
	$dest = URL;

	$source = "https://docs.google.com/forms/d/e/1FAIpQLSeysaukVsY4GiaIIpBcjtuuTKv83V-YgX-I5ASvXchnPgkZ_g/viewform?usp=sf_link";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/21/posg/emduciii?01
	
	echo <<<HTML

	<html>
		<head>
			<title>$titu</title>
			<meta property="og:title"  content="$titu">
			<meta name="description"   content="$desc">
			<meta property="og:image"  content="$imag">
			<meta http-equiv="Refresh" content="$time;url=$dest"/>
		</head>
		<body>
			<center>
				<p>
					<div">
						<div >
							<iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="$source" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
						</div>
					</div>	
				</p>
			</center>
		</body>
	</html>		

HTML;

?>

