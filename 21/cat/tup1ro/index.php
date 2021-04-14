<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	
	$dest = URL."21/cat/tup1ro";
	
	$titu = "TUP1ro - UTNLaRioja 2021";
	$desc = "Aula Virtual";
	// $desc = "Accesos al Aula Vrtual [ 01 Febrero 19 Hs.]";
	
	$genialyID = "607431cc72ecc50d75518380";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = URL."img4.jpg";

	$time = 1800;

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/21/preing?01

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

