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
		"1roICI"       => [1          , "96761370074", "879934863"  , "92023658063"],
		"2doICI"       => [1          , "96761370074", "98072933701", "92781193701"],
		"3roICI"       => [1          , "96761370074", "97101886947", "92955020518"],
		"4toICI"       => [1          , "96761370074", "94629812640", "95994613482"],
		"5toICI"       => [1          , "96761370074", "96701170714", ""],
		"6toICI"       => [1          , "96761370074", "95518301143", ""],
		"1roIEM"       => [1          , "96761370074", "91277544291", "91277544291"],
		"2doIEM"       => [1          , "96761370074", "92086937597", "92086937597"],
		"3roIEM"       => [1          , "96761370074", "94060234711", "92894001255"],
		"4toIEM"       => [1          , "96761370074", "92351175502", ""],
		"5toIEM"       => [1          , "96761370074", "96665531385", ""],
		"1roIEL"       => [1          , "96761370074", "92116614010", "92116614010"],
		"2doIEL"       => [1          , "96761370074", "96130488690", "96130488690"],
		"3roIEL"       => [1          , "96761370074", "98516961454", "98516961454"],
		"4toIEL"       => [1          , "96761370074", "97174449400", ""],
		"5toIEL"       => [1          , "96761370074", "98672429951", ""],
		"6toIEL"       => [1          , "96761370074", "91937629997", ""],
		"Aula Pública" => [1          , "96761370074", "435997049"  , ""]
	];

    function getAula($id=''){
        global $bdPLs;
        global $bdZIDs;

        if (!isset($bdZIDs[$id])) return "<br>ERRORAula<br>";

        $id = $id . '-UTNLaRioja';

        // PlayList

        $idP = (isset($bdPLs[$id])) ? $bdPLs[$id] : 0 ;

        if ($idP) $idP = "https://www.youtube.com/playlist?list=$idP";
    	else $idP = "http://www.youtube.com/c/UTNLaRiojaDTIC/playlists";

    	$idP = " | <a target='_blank' href='$idP'>Clases_Grabadas</a>";

    	// ID Aula Zoom

        $idE = $bdZIDs[$id][0];
        
        $idZ = $bdZIDs[$id][$idE];

        return "<p class='mbr-fonts-style panel-text display-7'><a target='_blank' href='https://zoom.us/j/$idZ'>$id</a>$idP</p>";
    }
	
	$bdAulas = [
		"bdCols"        => ["idZoom",      "idPlayList" ],
		"1roICI"       => ["92023658063", "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV"],
		"2doICI"       => ["92781193701", "PLSOY8GuPHc0BO2Oi4y9BsxfhVHP7DAvjH"],
		"3roICI"       => ["92955020518", "PLSOY8GuPHc0ByljDRcfwjvkYgvEV2c84T"],
		"4toICI"       => ["95994613482", "PLSOY8GuPHc0BYg076g1CcNPReauxykWTV"], //-11 Def - PRO
		// "4toICI"       => ["94629812640", "PLSOY8GuPHc0BYg076g1CcNPReauxykWTV"], //Temp - BASIC
		"5toICI"       => ["99884405368", "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up"], //-14 Def - BASIC
		// "5toICI"       => ["96701170714", "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up"], //-11 Temp - PRO BARBEITO
		"6toICI"       => ["95518301143", ""],
		"1roIEM"       => ["91277544291", "PLSOY8GuPHc0D1cIUQ6KE4Fa80VxzqlZGM"],
		"2doIEM"       => ["92086937597", "PLSOY8GuPHc0DVtPWmPaY0PavhT8WINUuB"],
		"3roIEM"       => ["92894001255", "PLSOY8GuPHc0DIwhv2NBaOIrORDH1FafVc"],
		"4toIEM"       => ["92351175502", ""],
		"5toIEM"       => ["96665531385", ""],
		"1roIEL"       => ["92116614010", "PLSOY8GuPHc0ABU9DTJ3u4IFXlPWtpE3Fc"],
		"2doIEL"       => ["96130488690", ""],
		"3roIEL"       => ["98516961454", "PLSOY8GuPHc0BUcYc7vMS0tkRQDkEat9vv"],
		"4toIEL"       => ["97174449400", ""],
		"5toIEL"       => ["98672429951", ""],
		"6toIEL"       => ["91937629997", ""],
		"Aula Pública" => ["435997049",   ""]
	];

    function getAula1($id=''){
        global $bdAulas;

        if (!isset($bdAulas[$id])) return "<br>ERRORAula<br>";

        list($idZ, $idP) = $bdAulas[$id]; 

        $id = $id . '-UTNLaRioja';

        if ($idP) $idP = "https://www.youtube.com/playlist?list=$idP";
    	else $idP = "http://www.youtube.com/c/UTNLaRiojaDTIC/playlists";

    	$idP = " | <a target='_blank' href='$idP'>Clases_Grabadas</a>";

        return "<p class='mbr-fonts-style panel-text display-7'><a target='_blank' href='https://zoom.us/j/$idZ'>$id</a>$idP</p>";
    }



	// echo '<pre>'.print_r( $bdAulas, true ).'</pre>';

	// exit;

 ?>