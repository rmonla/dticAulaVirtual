<?php 
	header('Content-Type: text/html; charset=utf-8');
	
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/1110DDHHGD/');
	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/charlas/1110DDHHGD?01

	$titu = "Derechos Humanos, Género y Diversidades";
	$desc = "Acceso Sala Virtual | Charla | UTNLaRioja";
	
	$imag = URL."imag.png";
	$time = 1800;
	$dest = URL;
	
	$genialyID = "5fa95e588722800d025abbf3";
	
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
    <center>
        <p>
            <div">
                <div>
                    <iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/$genialyID" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
                </div>
            </div>
        </p>
    </center>
</body>

</html>

HTML;

?>

