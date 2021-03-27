<?php 
	header('Content-Type: text/html; charset=utf-8');

	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/1110CHSenc/');
	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/1110CHSenc?01

	$titu = "Sensibilización Sobre Derechos Humanos, Género y Diversidades";
	$desc = "Acceso Sala Virtual | Charla | UTNLaRioja";
	
	$imag = URL."imag.png";
	$time = 1;
	$dest = URL."press";

	

	echo <<<HTML

<html>

<head>
    <title>$titu</title>
    <meta name="description" content="$desc">
    <meta property="og:title" content="$titu">
    <meta property="og:image" content="$imag">
    <meta http-equiv="Refresh" content="$time;url=$dest" />
</head>

<body>
    <p>
        Redirección automática en $time segundos o puedes acceder haciendo click <a href="$dest">aquí</a>
    </p>
    <p>
        <a href="$dest"><img src="$imag" alt="$desc" width="400"></a>
    </p>
</body>

</html>

HTML;

?>

