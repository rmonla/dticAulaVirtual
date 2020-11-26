<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/finales/201127-LicHyS/');
	
	$titu = "PFinal | Obra Vial Padercitas - Dique Los Sauces, Análisis y Riesgos de Hig. y Seg. | UTNLaRioja";
	$desc = "Accesos a la presentación [ 27 Noviembre 20 Hs.]";
	
	$genialyID = "5fbef0a4cbed770da5edc249";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = URL."imag.jpeg";

	$time = 1800;
	$dest = "../201127-LicHyS";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/finales/201127-LicHyS?01

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

