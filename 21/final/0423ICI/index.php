<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/finales/201229-IEL/');
	
	$titu = "Presentacion de Proyecto Final | Ingeniería Civil | UTNLaRioja";
	$desc = "Accesos a la presentación [ 23 Abril 19 Hs.]";
	
	$genialyID = "6080efacb3b2db0cfbbe95cf";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = URL."img4.jpg";

	$time = 1800;
	$dest = "../0423ICI";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/finales/201229-IEL?01

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

