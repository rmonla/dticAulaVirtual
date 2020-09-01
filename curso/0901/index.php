<?php 
	// define('URL', '../../');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/curso/0901');
	define('URL_IMG', URL.'_img/');
	
	$titu = "Curso | Materiales Piezo-magnéticos, Piezoeléctricos Ferróicos y Multi-ferróicos | POSG";
	$desc = "Acceso al Aula Virtual, inicio 4 Septiembre 17 Hs.";
	
	$urlGenialy = "https://view.genial.ly/5f4474b2a629680d72e9e2be";
	
	$imag = "0901.jpeg";

	$time = 1800;
	$dest = "../0901";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/curso/0901?2

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
				<center>
					<div style="width: 90%;">
						<div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">
							<iframe frameborder="0" width="850px" height="900px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="$urlGenialy" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
						</div>
					</div>	
				</center>
			</p>
		</body>
	</html>		

HTML;

?>

