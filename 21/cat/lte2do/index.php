<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/21/preing/');
	
	$titu = "2do Año - LTE - UTNLaRioja 2021";
	$desc = "Presentador Digital";
	// $desc = "Accesos al Aula Vrtual [ 01 Febrero 19 Hs.]";
	
	$genialyID = "607472307cf7370d7bb5608d";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = URL."img4.jpg";

	$time = 1800;
	$dest = URL;

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

