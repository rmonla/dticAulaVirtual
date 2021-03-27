<?php 
	header('Content-Type: text/html; charset=utf-8');
	define('URL', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/finales/201009ICI/');
	
	$titu = "Final | Cohousing NAKAMA | UTNlaRioja";
	$desc = "Accesos a la presentación [ 9 Octubre 19 Hs.]";
	
	$genialyID = "5f7f979bcd6f2b0daa3b6b78";
	
	$genialyURL = "https://view.genial.ly/" . $genialyID;
	
	$imag = URL."imag.jpeg";

	$time = 1800;
	$dest = "../201009ICI";

	// http://www.frlr.utn.edu.ar/dtic/aulavirtual/finales/201009ICI?01

	echo <<<HTML

	<html>
		<head>
			<title>$titu</title>
			<meta name="description"   content="$desc">
			<meta property="og:title"  content="$titu">
			<meta property="og:image"  content="$imag">
			<meta http-equiv="Refresh" content="$time;url=$dest"/>
		</head>
		<body>
			<center>
				<p>
					<div">
						<div >
							<iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="$genialyURL" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe>
						</div>
					</div>	
				</p>
			</center>
		</body>
	</html>		

HTML;

?>

