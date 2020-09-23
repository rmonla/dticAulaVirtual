<?php 
	// define('URL', '../../');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/ExpoFUTURO/');
	
	$titu = "ExpoFuturo2020 | UTNLaRioja";
	$desc = "Acceso a las Charlas";
	
	$genialyID = "5f61212c96e6bf0d97ce0587";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = URL."imag2.png";

	$time = 300;
	$dest = "../ExpoFUTURO";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/ExpoFUTURO?1

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

