<?php
	/*
	Programar Streeming

		1 - Crear Streeming programado en YouTube.
			[ https://studio.youtube.com/channel/UC/livestreaming ] 

			URL Transmisión: rtmp://a.rtmp.youtube.com/live2

			CLAVE de Transmision: 7g1r-grz5-4cp9-4tuj-9maz

			URL Página: https://youtu.be/cHtYsAENFjw

		2 - Crear la reunión Zoom 
			https://utn.zoom.us/j/82103309041

		3 - Programar streaming.
			Iniciar y dentro de la reunion ir a trasmitir personalizado.
			
	 */

	$id = 'cHtYsAENFjw';
	$newURL = "https://youtu.be/$id";
	header('Location: '.$newURL);
	die();

?>
