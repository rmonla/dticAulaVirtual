<?php 
	header('Content-Type: text/html; charset=utf-8');
	// define('URL', '../../');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/laygies/');
	
	$titu = "AULA VIRTUAL [LAyGIES-Mza]";
	$desc = "Licenciatura en Admnistracion y Gestión de Instituciones de Educación Superior";
	$imag = URL."imag.jpg";
	$time = 1800;
	$dest = "../laygies";
	
	$genialyID = "5f3ff198089eb30d797127c9";
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/0910?1

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

