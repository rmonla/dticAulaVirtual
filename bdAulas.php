<?php 

	$bdAulas = [
		"bdCols"        => ["idZoom",      "idPlayList" ],
		"1roICI"       => ["92023658063", "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV"],
		"2doICI"       => ["92781193701", "PLSOY8GuPHc0BO2Oi4y9BsxfhVHP7DAvjH"],
		"3roICI"       => ["92955020518", "PLSOY8GuPHc0ByljDRcfwjvkYgvEV2c84T"],
		"4toICI"       => ["94629812640", "PLSOY8GuPHc0BYg076g1CcNPReauxykWTV"], //Temporal - BASIC
		// "4toICI"       => ["95994613482", "PLSOY8GuPHc0BYg076g1CcNPReauxykWTV"], //PorDefecto - PRO
		"5toICI"       => ["96701170714", "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up"], //Temporal - PRO BARBEITO
		// "5toICI"       => ["99884405368", "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up"], //PorDefecto - BASIC
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
		"5toICI"       => ["91653210363", "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up"],
		"Aula Pública" => ["435997049",   ""]
	];

    function getAula($id=''){
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