<?php 

	$bdAulas = [
		"bdCols"        => ["idZoom",      "idPlayList" ],
		"1roICI-"       => ["92023658063", "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV"],
		"2doICI-"       => ["92781193701", ""],
		"3roICI-"       => ["92955020518", "PLSOY8GuPHc0ByljDRcfwjvkYgvEV2c84T"],
		"4toICI-"       => ["95994613482", "PLSOY8GuPHc0BYg076g1CcNPReauxykWTV"],
		"5toICI-"       => ["91653210363", "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up"],
		"6toICI-"       => ["95518301143", ""],
		"1roIEM-"       => ["91277544291", "PLSOY8GuPHc0D1cIUQ6KE4Fa80VxzqlZGM"],
		"2doIEM-"       => ["92086937597", ""],
		"3roIEM-"       => ["92894001255", ""],
		"4toIEM-"       => ["92351175502", ""],
		"5toIEM-"       => ["96665531385", ""],
		"1roIEL-"       => ["92116614010", ""],
		"2doIEL-"       => ["96130488690", ""],
		"3roIEL-"       => ["98516961454", "PLSOY8GuPHc0BUcYc7vMS0tkRQDkEat9vv"],
		"4toIEL-"       => ["97174449400", ""],
		"5toIEL-"       => ["98672429951", ""],
		"6toIEL-"       => ["91937629997", ""],
		"Aula Pública-" => ["435997049",   ""]
	];

    function getAula($id=''){
        global $bdAulas;

        if (!isset($bdAulas[$id])) return "<br>ERRORAula<br>";

        list($idZ, $idP) = $bdAulas[$id]; 

        $id = $id . 'UTNLaRioja';

        if ($idP) $idP = " | <a target='_blank' href='https://www.youtube.com/playlist?list=$idP'>Clases_Grabadas</a>";

        return "<p class='mbr-fonts-style panel-text display-7'><a target='_blank' href='https://zoom.us/j/$idZ'>$id</a>$idP</p>";
    }



	// echo '<pre>'.print_r( $bdAulas, true ).'</pre>';

	// exit;

 ?>