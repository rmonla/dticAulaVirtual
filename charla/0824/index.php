<?php 
	// define('URL', '../../');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	define('URL_IMG', URL.'_img/');
	
	$titu = "Charla - Ley Micaela - UTNLaRioja [_24deAgosto-18Hs_]";
	$desc = "Destinado a toda la comunida de la Facultad.";
	
	$imag = URL_IMG."CharlaLeyMicaela.png";

	$time = 30;
	$dest = "../0824";


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
						<iframe frameborder="0" width="850px" height="900px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5f185b91c43a880d757f18fc" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
					</div>
				</div>	
			</p>
		</body>
	</html>		

HTML;

?>

