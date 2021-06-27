<?php  

	$tit = 'Solicitud de Equipamientos y Servicios'; 
	
	$des = 'Form_1801 - Dirección de TIC - UTNLaRioja';
	
	$ima = rmMyURL() . 'miniatura.png';
	
	$tpo = 1;
	
	$dst = 'https://docs.google.com/forms/d/e/1FAIpQLSejI-oFj2r3tVjpdDm85leMpfugB864Ieex4jGKykX1hKBTNQ/viewform';

	$ref = ( $tpo > 0 )? '<meta http-equiv="Refresh" content="'.$tpo.';url='.$dst.'">' : '';

	// $dst = 'https://api.whatsapp.com/send?phone=5493804297064&text=';
	// $msj = 'Hola Ricardo agregeme al grupo << ' . $tit . ' >>%20 yo me llamo MiNombre APELLIDO%20Gracias.';
	// $dst = $dst . $msj;


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

	/**
	 * rmRedir: Redirecciona a una URL diferente.
	 * @param  string  $tit Título del link de destino.
	 * @param  string  $des Descripción del contenido de destino.
	 * @param  string  $dst Url de destino donde se redirecciona.
	 * @param  string  $ima Imágen .jpeg miniatura.
	 * @param  integer $tpo Tiempo en segundos que espera para redireccionar si esta en 0 no redirecciona automáticamente.
	 * @return HTML         Código html retornado en realción a las variables entregadas.
	 */
	function rmRedir($tit = '', $des = '', $dst = '', $ima = '', $tpo = 2){
		
		$pag = <<<HTML

	<html>
		<head>
			<meta name="description" content="$des">
			<meta property="og:title" content="$tit" />
			<meta property="og:image" content="$ima" />
			$ref
		</head>
		<body>
			<p>Redirección automática en $tpo segundos o puedes acceder haciendo click <a href="$dst">aquí</a></p>
			<p><a href="$dst"><img src="$ima" alt="$des" width="400"></a></p>

		</body>
	</html>

HTML;

		echo $pag;

	}

	rmRedir( $tit, $des, $dst, $ima, $tpo);

	die();
?>
