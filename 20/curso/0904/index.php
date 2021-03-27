<?php 
	// define('URL', '../../');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/curso/0904/');
	
	$titu = "Curso | Materiales Piezomagnéticos, Piezoeléctricos Ferróicos y Multiferróicos | POSG | UTNLaRioja";
	$desc = "Acceso al Aula Virtual [Inicio 4 Septiembre 17 Hs.]";
	
	$genialyID = "5f4eb16a4f105d0cf3727a7c";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = URL."imag.jpeg";

	$time = 1800;
	$dest = "../0904";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/curso/0904?1

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

