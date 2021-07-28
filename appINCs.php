<?php 
/* «® CONSTANTES  ®» */
	define('AV_SITIO',    'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	define('AV_ADIGITAL', 'https://www.youtube.com/channel/UC_cmKYtM9hy9-UI_qHpmahw');
	define('AV_IMGS',     AV_SITIO.'_imgs/');

/* «® INCLUDES  ®» */
	include_once AV_SITIO.'appDATs.php';
	include_once AV_SITIO.'_main/bdAulas.php';
	include_once AV_SITIO.'_main/getHTMLs.php';

/* «® PREDETERMINADOS  ®» */
	header('Content-Type: text/html; charset=utf-8');

?>