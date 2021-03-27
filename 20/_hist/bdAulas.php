<?php 

	$bdPLs = [ // BD de Play Lists de YouTube.
		"1roICI" => "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV",
		"2doICI" => "PLSOY8GuPHc0BO2Oi4y9BsxfhVHP7DAvjH",
		"3roICI" => "PLSOY8GuPHc0ByljDRcfwjvkYgvEV2c84T",
		"4toICI" => "PLSOY8GuPHc0BYg076g1CcNPReauxykWTV",
		"5toICI" => "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up",
		"1roIEM" => "PLSOY8GuPHc0D1cIUQ6KE4Fa80VxzqlZGM",
		"2doIEM" => "PLSOY8GuPHc0DVtPWmPaY0PavhT8WINUuB",
		"3roIEM" => "PLSOY8GuPHc0DIwhv2NBaOIrORDH1FafVc",
		"1roIEL" => "PLSOY8GuPHc0ABU9DTJ3u4IFXlPWtpE3Fc",
		"3roIEL" => "PLSOY8GuPHc0BUcYc7vMS0tkRQDkEat9vv"
	];

	$bdZIDs = [ // BD de IDs de Aulas Zoom. 
		"Estados"      => ["0=Estado" , "1=Bloqueda" , "2=Basic"    , "3=Pro"      ],
		"1roICI"       => [    3      , "96761370074", "879934863"  , "92023658063"], // 2
		"2doICI"       => [    3      , "96761370074", "98072933701", "92781193701"], // 5
		"3roICI"       => [    3      , "96761370074", "97101886947", "92955020518"], // 8
		"4toICI"       => [    3      , "96761370074", "94629812640", "95994613482"], // 11
		"5toICI"       => [    2      , "96761370074", "99884405368", ""           ], // 14
		"6toICI"       => [    2      , "96761370074", "95518301143", ""           ], // 17
		"1roIEM"       => [    3      , "96761370074", "91277544291", "91277544291"], // 3
		"2doIEM"       => [    3      , "96761370074", "92086937597", "92086937597"], // 6
		"3roIEM"       => [    3      , "96761370074", "94060234711", "92894001255"], // 9
		"4toIEM"       => [    2      , "96761370074", "92351175502", ""           ], // 12
		"5toIEM"       => [    2      , "96761370074", "96665531385", ""           ], // 15
		"1roIEL"       => [    3      , "96761370074", "92116614010", "92116614010"], // 4
		"2doIEL"       => [    3      , "96761370074", "96130488690", "96130488690"], // 7
		"3roIEL"       => [    3      , "96761370074", "98516961454", "98516961454"], // 10
		"4toIEL"       => [    2      , "96761370074", "97174449400", ""           ], // 13
		"5toIEL"       => [    2      , "96761370074", "98672429951", ""           ], // 16
		"6toIEL"       => [    2      , "96761370074", "91937629997", ""           ], // 18
		"Matemática"   => [    2      , "96761370074", "97478835879", ""           ], // 18
		"Física"       => [    2      , "96761370074", "97478835879", ""           ], // 18
		"Química"      => [    2      , "96761370074", "97478835879", ""           ], // 18
		"APublica" => [    2      , "96761370074", "435997049"  , ""           ]
	];

	function getAula($id=''){
		global $bdPLs;
		global $bdZIDs;

		if (!isset($bdZIDs[$id])) return "<br>ERRORAula<br>";

		// PlayList

		$idP = (isset($bdPLs[$id])) ? $bdPLs[$id] : 0 ;

		if ($idP) $idP = "https://www.youtube.com/playlist?list=$idP";
		else $idP = "http://www.youtube.com/c/UTNLaRiojaDTIC/playlists";

		$idP = " | <a target='_blank' href='$idP'>Clases_Grabadas</a>";

		// ID Aula Zoom
		$idE = $bdZIDs[$id][0];
		$idZ = $bdZIDs[$id][$idE];

		// Retorno HTML Aula
		$sep = [' ', ' ', '~', '-'];
		$id = $id . $sep[$idE] . 'UTNLaRioja';

		return "<p class='mbr-fonts-style panel-text display-7'><a target='_blank' href='https://zoom.us/j/$idZ'>$id</a>$idP</p>";
	}
	
	// echo '<pre>'.print_r( $bdZIDs, true ).'</pre>';

	// exit;

 ?>