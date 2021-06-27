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
	

	$titu = 'InfoAula - DTIC - UTNLaRioja'; 
	
	$desc = 'Horarios de uso de la InfoAula de UTNLaRioja.';
	
	$dest = './';

	$imag = rmMyURL() . 'minia.jpg';
	
	$time = 3600;
	

		
	if (!$time) header('Location: '.$dest);
	else {
		$pag = <<<HTML
	<html>
		<head>
			<meta name="description" content="$desc">
			<meta property="og:title" content="$titu"/>
			<meta property="og:image" content="$imag"/>
			<meta http-equiv="Refresh" content="$time;url=$dest"/>
		</head>
		<body>
			<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=America%2FArgentina%2FBuenos_Aires&amp;src=a2hhcjVxanZlbTdrMjdwZWsyMmxkcWJrZ2dAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=czRubm45dnIzdm50MWxscTdpcjdudXU3ZGdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%237CB342&amp;color=%23B39DDB&amp;color=%230B8043&amp;mode=WEEK&amp;showNav=1&amp;title=DTIC%20-%20UTNLaRioja" style="border-width:0" width="800" height="500" frameborder="0" scrolling="no"></iframe>
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
