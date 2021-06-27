<?php
	include_once 'fxs.php';
	
	function dticHead($titu='', $desc='', $imag='', $time=2, $dst=''){
		header('Content-Type: text/html; charset=utf-8');
		header("<title>$tit</title>");

		header( "refresh:5;url=wherever.php" );
		echo "Será redireccionado en aproximadamente $time segundos. O si lo desea puede hacer click <a href='$dst'>Aquí</a>.";


	}

	function dticGetHead($id=''){
		global $lnkDats;

		if ( !isset($lnkDats->{$id}) ) 

			echo "El link no existe.";
		
		else {

			$d = $lnkDats->{$id};
		
			$d->imag = rmMyUrl() . $d->imag;

			
			$pag = 
<<<HTML
	<html>
		<head>
			<title>$d->titp</title>
			<meta name="description"   content="$d->desc">
			<meta property="og:title"  content="$d->titp"/>
			<meta property="og:image"  content="$d->imag"/>
			<meta http-equiv="Refresh" content="$d->time;url=$d->dest"/>

		</head>
		<body>
			<p>Redirección automática en $d->time segundos o puedes acceder haciendo click <a href="$d->dest">aquí</a></p>
			<p><a href="$d->dest"><img src="$d->imag" alt="$d->desc" width="400"></a></p>
		</body>

	</html>
HTML;
			header('Content-Type: text/html; charset=utf-8');
			echo $pag;
// 			$pag = 
// <<<HTML
// 	<html>
// 		<head>
// 			<title>$d->titp</title>
// 			<meta name="description"  content="$d->desc">
// 			<meta property="og:title" content="$d->titp"/>
// 			<meta property="og:image" content="$d->imag"/>
// 			<meta http-equiv="refresh" content="$time;url=$dest"/>

// 		</head>
// 		<FRAMESET rows="100%" BORDER=0 FRAMEBORDER=0 FRAMESPACING=0>
// 		<FRAME NAME="top" SRC="$d->dest" NORESIZE></FRAMESET>

// 	</html>
// HTML;
// 			echo $pag;

		}

	}




// 	include_once 'inc/rmMyUrl.php';

// 	$d->titp = 'dticApps - UTNLaRioja'; 
	
// 	$desc = 'dticApps es un servidor de archivos y aplicaciones utilizados generalmente para hacer soporte técnico a los equipos de la UTNLaRioja.';
	
// 	$dest = 'http://192.168.7.7/apps';

// 	$imag = rmMyUrl() . 'img/dticSitio.png';
	
// 	$time = 5;
	
// 	if (!$time) header('Location: '.$dest);
// 	else {
// 		header('Content-Type: text/html; charset=utf-8');
		
// 		$pag = 
// <<<HTML
// 	<html>
// 		<head>
// 			<title>$titu</title>
// 			<meta name="description" content="$desc">
// 			<meta property="og:title" content="$titu"/>
// 			<meta property="og:image" content="$imag"/>
// 			<meta http-equiv="Refresh" content="$time;url=$dest"/>
// 			<link rel="stylesheet" type="text/css" href="css/w3.css">

// 		</head>

// 	</html>
// HTML;
// 		echo $pag;

// 	}




	//header('Location:http://192.168.7.7');
		// <BODY>
		// 	<p>Redirección automática en $dats->time segundos o puedes acceder haciendo click <a href="$dats->dest">aquí</a></p>
		// 	<p><a href="$dats->dest"><img src="$dats->imag" alt="$desc" width="400"></a></p>
		// </BODY>
		// <meta http-equiv="Refresh" content="1;url=$dats->dest"/>
		// 
		// http://190.114.205.17/dticServTec/glpi
	// <FRAMESET rows="100%" BORDER=0 FRAMEBORDER=0 FRAMESPACING=0>
	// <FRAME NAME="top" SRC="goto.php" NORESIZE></FRAMESET>
/**
	<HTML>
		<HEAD>
			<title>ServTec - UTNLaRioja</title>
			<meta property="og:title" content="Servicio Técnico DTIC - UTNLaRioja"/>
			<meta name="description" content="Sistema que permite la administración y gestión del parque informático de la Facultad como así también el registro, mediante ordenes de servicio, de las distintas reparacines y mantenimiento del mismo.">
			<meta property="og:image" content="http://www.frlr.utn.edu.ar/dtic/servtec/dticSitio.png"/>
			<meta http-equiv="Refresh" content="1;url=http://servtec.frlr.utn.edu.ar/"/>
		</HEAD>
	</HTML>
**/

?>

