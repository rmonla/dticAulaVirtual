<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('SITIO', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/ExpoFUTURO/');
	define('URL', SITIO.'recursos/');
	
	$titu = "RECURSOS [ExpoFuturo2020]";
	$desc = "Presentaciones, Videos, Guiones, etc.";
	
	$imag = URL."recursos.png";

	$time = 1;
	$dest = "https://drive.google.com/drive/folders/1UaKCMzP2p-CtoYjO6iYYRFnbHEQQpq7O?usp=sharing";

	$idspreadsheets = "2PACX-1vS81-oewP8sQA3B9lHJeMj_pYxDCu3LkqWbX5cIkt1rjlCfWdfPjjc6uHiQ_1gXnBSgVbhs1-Bi_PJ5";

	//URL Acceso. 
	//  http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/ExpoFUTURO/recursos?1
	//  https://drive.google.com/drive/folders/1UaKCMzP2p-CtoYjO6iYYRFnbHEQQpq7O?usp=sharing


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
					Redirección automática en $time segundos o puedes acceder haciendo click <a href="$dest">aquí</a>
				</p>
				<p>
					<a href="$dest"><img src="$imag" alt="$desc" width="400"></a>
				</p>
			</center>
		</body>
	</html>		

HTML;

?>

