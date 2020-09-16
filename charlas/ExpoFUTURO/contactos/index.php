<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/ExpoFUTURO/contactos/');
	
	$titu = "CONTACTOS [ExpoFuturo2020]";
	$desc = "Números y datos de contacto de Coordinación";
	
	$imag = URL."contactos.png";

	$time = 300;
	$dest = "../contactos";

	$idspreadsheets = "2PACX-1vS81-oewP8sQA3B9lHJeMj_pYxDCu3LkqWbX5cIkt1rjlCfWdfPjjc6uHiQ_1gXnBSgVbhs1-Bi_PJ5";

	//URL Acceso. 
	//  http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/ExpoFUTURO/contactos?1

	//Acceso al archivo del drive. 
	//https://docs.google.com/spreadsheets/d/1fhDi2_Ax-IgIZUpXLmBiRk0IQ-o9k1JhqtaKRCGfM9E

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
				<iframe width="100%" height="100%" 
					src="https://docs.google.com/spreadsheets/d/e/$idspreadsheets/pubhtml?single=false&amp;widget=false&amp;headers=false">
					</iframe>
			</center>
		</body>
	</html>		

HTML;

?>

