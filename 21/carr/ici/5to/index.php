<?php  
/* «® INCLUIDES  ®» */
	include_once "../../../../_main/bdAulas.php";

/** «® MAIN  ®» **/	
	$idA = 'ICI.5to.21';
	$dst = getAulaDat($idA, 'aUrlZ');
	$tit = getAulaDat($idA, 'aNOM');
	$dsc = "Acceso al Aula Virtual $idA - UTNLaRioja 2021";
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