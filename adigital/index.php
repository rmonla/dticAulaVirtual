<?php 

/* «® INCLUIDES  ®» */
	include_once "../appINCs.php";

/** «® MAIN  ®» **/	
	$dst = AV_ADIGITAL;
	$tit = "ARCHIVO-DIGITAL.UTNLaRioja";
	$dsc = "LISTAS DE CLASES GRABADAS - UTNLaRioja 2021";
	$tmp = 1; 
	$img = AV_IMGS."logoUTNLR-Mini.png";

/** «® SALIDA  ®» **/
	echo <<<HTML

	<html>
		<head>
			<title>$tit</title>
			<meta property="og:title"  content="$tit">
			<meta name="description"   content="$dsc">
			<meta property="og:image"  content="$img">
			<meta http-equiv="Refresh" content="$tmp;url=$dst"/>
		</head>
	</html>		

HTML;

?>

