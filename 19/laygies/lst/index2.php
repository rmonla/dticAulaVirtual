<?php  
	/**
	 * rmRedir: Redirecciona a una URL diferente.
	 * @param  string  $titu Título del link de destino.
	 * @param  string  $desc Descripción del contenido de destino.
	 * @param  string  $dest Url de destino donde se redirecciona.
	 * @param  string  $imag Imágen miniatura para mostrar.
	 * @param  integer $time Tiempo en segundos que espera para redireccionar si esta en 0 solo redirecciona automáticamente.
	 * @return HTML          Código html retornado en realción a las variables entregadas.
	 */
	

	$titu = 'Integrantes - LAyGIES - UTNMendoza'; 
	
	$desc = 'Lista de integrantes de la Licenciatura NoDocente.';
	
	$dest = './';

	$imag = rmMyURL() . 'minia.jpg';
	
	$time = 300;
	
	$dstSol = '';
	// https://forms.gle/B5QcjXSxaoxYSQVH8
	// https://forms.gle/jTS2iiB1DqWX52566
	// onclick="window.open('some.htm','_blank');"
	// location.href="./newSol";
	// 
		
	if (!$time) header('Location: '.$dest);
	else {
		$pag = 
<<<HTML
	<html>
		<head>
			<title>Integrantes - LAyGIES - UTNMendoza</title>
			<meta name="description" content="$desc">
			<meta property="og:title" content="$titu"/>
			<meta property="og:image" content="$imag"/>
			<meta http-equiv="Refresh" content="$time;url=$dest"/>
			<link rel="stylesheet" type="text/css" href="css/w3.css">
			<script type="text/javascript">
				function newSol(){
					window.open('./newSol','_blank');
				}
				// function resize3() {
				//     var bHeight = document.body.offsetHeight;
				//     var e = document.getElementById('marco');
				//     e.style.height = (bHeight - 50) + 'px';
				// }
				// window.onload = resize3;
				// window.onresize = resize3;
			</script>

		</head>
		<body onresize="resize3()">
			<div id="marco" class="w3-display-middle">
				<div id="menus" class="w3-right">
					-- Los datos se actualizan automáticamente cada 5 minutos. --
					<button type="button" onclick="newSol();">Agregar Nuevo</button>
				</div>
				<div id="googlesheet">
					<iframe id="iFrame" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQK5insbxsZDdx1bodPwMQLZzJQHdBx67FzgAYxpS54ylQ9vDKXtxCzp7Uz1BdXGpctkmZLcaeT88zo/pubhtml?gid=1065395072&amp;single=true&amp;widget=true&amp;headers=false" style="border-width:0" width="700" height="690" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="w3-center">
					-- Los datos se actualizan automáticamente cada 5 minutos. --
				</div>
			</div>
		</body>
	</html>
HTML;
			echo $pag;
		}

			// <p>Redirección automática en $time segundos o puedes acceder haciendo click <a href="$dest">aquí</a></p>
			// <p><a href="$dest"><img src="$imag" alt="$desc" width="400"></a></p>
	/**
	 * Analiza ubicación actual de la uri actual y la retorna completa con su protocolo correspondiente.
	 * @return [string] [URL completa con su protocolo correspondiente.]
	 * @author Ricardo MONLA <rmonla@gmail.com>
	 */
	function rmMyUrl(){
	    if(isset($_SERVER['HTTPS']))
	        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	    else 
	    	$protocol = 'http';
	    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}

	die();
?>
