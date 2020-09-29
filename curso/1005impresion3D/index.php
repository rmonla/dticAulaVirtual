<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/curso/1005impresion3D/');
	
	$titu = "Curso | Introducción a la impresión 3D | UTNLaRioja";
	$desc = "Accesos al Aula Virtual [5,7 y 9 Oct. 11 Hs.]";
	
	$genialyID = "5f737901adfa830d0deb0a16";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = URL."imag.jpeg";

	$time = 1800;
	$dest = "../1005impresion3D";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/curso/1005impresion3D?01

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
				<p>
					<div">
						<div >
							<iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="$genialyURL" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
						</div>
					</div>	
				</p>
			</center>
		</body>
	</html>		

HTML;

?>

