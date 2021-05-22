<?php 
	header('Content-Type: text/html; charset=utf-8');

	$titu = "GAIA.CONFERENCIAS";
	$desc = "CICLO DE CONFERENCIAS-DEBATE GAIA - UTNLaRioja 2021";

	define('SITIO', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	define('URL', SITIO.'21/gaia/conferencias');
	
	
	$imag = SITIO."_imgs/logoUTNLR-Mini.png";

	$time = 1800;
	$dest = URL;

	$source = "https://calendar.google.com/calendar/u/0/embed?src=5120gq459cmenlt918g1ncnscs@group.calendar.google.com&ctz=America/Argentina/La_Rioja&mode=AGENDA";

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

