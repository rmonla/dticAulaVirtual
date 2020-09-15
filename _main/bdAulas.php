<?php 

	$bdNoms = [ // BD de Play Lists de YouTube.
		"PreIng_M" => "08:00 - Matemática | Marcela SILVA",
		"PreIng_F" => "10:15 - Física | Rubén FAINSTEIN",
		"PreIng_Q" => "15:30 - Química | Manuel MERCADO"
	];

	$bdPList = [ // BD de Play Lists de YouTube.
		"PreIng"  => "PLSOY8GuPHc0AiCvJ0UHUrFFBsJYLnTAoR",
		"ICI_1ro" => "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV",
		"ICI_2do" => "PLSOY8GuPHc0BO2Oi4y9BsxfhVHP7DAvjH",
		"ICI_3ro" => "PLSOY8GuPHc0BoRPUx0szagXoK9vRrt0gp",
		"ICI_4to" => "PLSOY8GuPHc0CtmmekAJGx1pXDFlqL-i5q",
		"ICI_5to" => "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up",
		"IEL_1ro" => "PLSOY8GuPHc0ABU9DTJ3u4IFXlPWtpE3Fc",
		"IEL_2do" => "PLSOY8GuPHc0DQ3sghyebH3509oFmL61Hn",
		"IEL_3ro" => "PLSOY8GuPHc0BUcYc7vMS0tkRQDkEat9vv",
		"IEM_1ro" => "PLSOY8GuPHc0D1cIUQ6KE4Fa80VxzqlZGM",
		"IEM_2do" => "PLSOY8GuPHc0DVtPWmPaY0PavhT8WINUuB",
		"IEM_3ro" => "PLSOY8GuPHc0DIwhv2NBaOIrORDH1FafVc"
	];

	$bdZoomDats = [ // BD de IDs de Aulas Zoom. 
		"aID/Cols" => ["0=Estado" , "1=Bloqueda" , "2=Basic"    , "3=Pro"      ],
		"PreIng_M" => [    3      , "96761370074", ""           , "97478835879"], // 18
		"PreIng_F" => [    3      , "96761370074", ""           , "97478835879"], // 18
		"PreIng_Q" => [    3      , "96761370074", ""           , "97478835879"], // 18
		"ICI_1ro"  => [    3      , "96761370074", "879934863"  , "92023658063"], // 2
		"ICI_2do"  => [    3      , "96761370074", "98072933701", "92781193701"], // 5
		"IEM_1ro"  => [    3      , "96761370074", "91277544291", "91277544291"], // 3
		"ICI_3ro"  => [    2      , "96761370074", "97101886947", "92955020518"], // 8
		"ICI_4to"  => [    2      , "96761370074", "94629812640", "95994613482"], // 11
		"ICI_5to"  => [    2      , "96761370074", "99884405368", ""           ], // 14
		"ICI_6to"  => [    2      , "96761370074", "95518301143", ""           ], // 17
		"IEM_2do"  => [    2      , "96761370074", "92086937597", "92086937597"], // 6
		"IEM_3ro"  => [    2      , "96761370074", "94060234711", "92894001255"], // 9
		"IEM_4to"  => [    2      , "96761370074", "92351175502", ""           ], // 12
		"IEM_5to"  => [    2      , "96761370074", "96665531385", ""           ], // 15
		"IEL_1ro"  => [    2      , "96761370074", "92116614010", "92116614010"], // 4
		"IEL_2do"  => [    2      , "96761370074", "91667813566", "96130488690"], // 7
		"IEL_3ro"  => [    2      , "96761370074", "98516961454", "98516961454"], // 10
		"IEL_4to"  => [    2      , "96761370074", "97174449400", ""           ], // 13
		"IEL_5to"  => [    2      , "96761370074", "98672429951", ""           ], // 16
		"IEL_6to"  => [    2      , "96761370074", "91937629997", ""           ], // 18
		"APublica" => [    2      , "96761370074", "435997049"  , ""           ]
	];

	function getNom($aID){
		global $bdNoms;
		return isset($bdNoms[$aID]) ? $bdNoms[$aID] : 0;
	}
	function getZoomDat($aID){
		global $bdZoomDats;
		return isset($bdZoomDats[$aID]) ? $bdZoomDats[$aID] : 0;
	}
	function getPListID($aID){
		global $bdPList;
		return isset($bdPList[$aID]) ? $bdPList[$aID] : 0;
	}
	function getPList($aID){
		$PListID = getPListID($aID);
		return $PListID ? 
			"<a target='_blank' href='https://www.youtube.com/playlist?list=".$PListID."'>Clases_Grabadas</a>" : '';
	}
			//"http://www.youtube.com/c/UTNLaRiojaDTIC/playlists" ;

	/**
	 * Genera el html de enlace de un aula a partir de in ID que se encuentra en la base de datos.
	 * @param  string $aID ID del Aula
	 * @return string      HTML de acceso al Aula.
	 */
	function getAula($aID){
		// ZoomDat
			$aZoomDat = getZoomDat($aID);

		if ( !$aZoomDat ) return "<br>ERRORAula<br>";

		// Array enlaces.
			$aEnlaces = [];

		// Estado del Aula
			$aEst = $aZoomDat[0];

		// ID del Aula
			$aZoomID = $aZoomDat[$aEst];

		// Nombre del Aula
			$nSep = [' ', ' ', '~', '-'];
			$nSep = $nSep[$aEst];
			
			$aNom = ( $aNom = getNom($aID) ) ? "$nSep $aNom" : "$nSep $aID UTNLaRioja" ;

			// $aNom = $aID.$nSep.'UTNLaRioja';

		// Enlace del Aula
			$aOnClick   = "onclick=\"gtag('event', '$aNom', {'event_category': '$aID', 'event_label': '', 'value': '$aNom', 'non_interaction': true });\"";
			$aZoomUrl   = "https://zoom.us/j/$aZoomID";
			$aZoom      = "<a target='_blank' href='$aZoomUrl' $aOnClick>$aNom</a>";
			$aEnlaces[] = $aZoom;

		// PlayList
			$aPList = getPList($aID) ;

			if ( $aPList ) $aEnlaces[] = $aPList;

			$aEnlaces = implode(' ---> ', $aEnlaces);
			
		return "<p class='align-center' mbr-fonts-style panel-text display-7'>$aEnlaces</p>";
	}
		// onclick="gaReg('$id'); return false;"
	
/**
 * Genera el html del grupo de Aulas.
 * @param  string $grupo  ID del grupo
 * @param  string $titulo TITULO para mostrar del Grupo.
 * @param  string $aulas  HTML de las Aulas.
 * @return html           HTML del Grupo.
 */
function getGrupo($grupo='', $titulo='', $aulas=''){
    $grupo2 = $grupo . '_0';
    
    return <<<HTML
    <div class="card"> <!-- $titulo -->
        <div class="card-header" role="tab" id="headingOne">
            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#$grupo2" aria-expanded="false" aria-controls="$grupo">
                <h4 class="mbr-fonts-style display-5">
                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                    $titulo
                  </h4>
              </a>
          </div>
        <div id="$grupo2" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_0">
            <div class="panel-body p-4">
              $aulas
            </div>
          </div>
    </div>
HTML;
  }

function getGrupo2($grupo='', $titulo='', $aulas=''){
    $grupo2 = $grupo . '_0';
    
    return <<<HTML
    <div class="card"> <!-- $titulo -->
        <div class="card-header" role="tab" id="headingDos">
            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#$grupo2" aria-expanded="false" aria-controls="$grupo">
                <h4 class="mbr-fonts-style display-5">
                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                    $titulo
                  </h4>
              </a>
          </div>
        <div id="$grupo2" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingDos" data-parent="#bootstrap-accordion_0">
            <div class="panel-body p-4">
              $aulas
            </div>
          </div>
    </div>
HTML;
  }

	// echo '<pre>'.print_r( $bdZoomDats, true ).'</pre>';

	// exit;

 ?>