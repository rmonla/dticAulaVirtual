<?php 
	header('Content-Type: text/html; charset=utf-8');

	$titu = "CURSOS.CONFERENCIAS.EVENTOS.UTNLaRioja";
	$desc = "Cursos y Conferencias - UTNLaRioja 2021";

	define('SITIO', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	define('URL', SITIO.'21/cursos');
	
	
	$imag = SITIO."_imgs/logoUTNLR-Mini.png";

	$time = 1800;
	$dest = URL;

	$source = "./cal";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/21/posg/emduciii?01
	
	// $genialyID = "6027b4045884590d8d1a672f";
	// $genialyURL = "https://view.genial.ly/" . $genialyID;

							// <iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="$genialyURL" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>

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
							<iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="$source"></iframe>
						</div>
					</div>	
				</p>
			</center>
		</body>
	</html>		

HTML;

?>

