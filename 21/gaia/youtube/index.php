<?php
	/*
	Programar Streeming

		1 - Crear Streeming programado en YouTube.
			[ https://studio.youtube.com/channel/UC/livestreaming ] 

			URL Transmisión: rtmp://a.rtmp.youtube.com/live2

			CLAVE de Transmision: 7g1r-grz5-4cp9-4tuj-9maz

			URL Página: https://youtu.be/jJFWnA9JmCY

		2 - Crear la reunión Zoom 
			https://utn.zoom.us/j/84928097209

		3 - Programar streaming.
			Iniciar y dentro de la reunion ir a trasmitir personalizado.
			
	 */

	$id = 'jJFWnA9JmCY';
	$newURL = "https://youtu.be/$id";
	header('Location: '.$newURL);
	die();

?>
