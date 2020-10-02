<?php 

	$bdNoms = [ // BD de Play Lists de YouTube.
		"PreIngComA" => "PREING21 - Comisión A",
		"PreIngComB" => "PREING21 - Comisión B",
		"PreIng_M" => "08:00 - Matemática | Marcela SILVA",
		"PreIng_F" => "10:15 - Física | Rubén FAINSTEIN",
		"PreIng_Q" => "15:30 - Química | Manuel MERCADO"
	];

	$bdPList = [ // BD de Play Lists de YouTube.
		"PreIngComA" => "PLSOY8GuPHc0AiCvJ0UHUrFFBsJYLnTAoR",
		"PreIngComB" => "PLSOY8GuPHc0AiCvJ0UHUrFFBsJYLnTAoR",
		"PreIng" => "PLSOY8GuPHc0AiCvJ0UHUrFFBsJYLnTAoR",
		"ICI1ro" => "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV",
		"ICI2do" => "PLSOY8GuPHc0BO2Oi4y9BsxfhVHP7DAvjH",
		"ICI3ro" => "PLSOY8GuPHc0BoRPUx0szagXoK9vRrt0gp",
		"ICI4to" => "PLSOY8GuPHc0CtmmekAJGx1pXDFlqL-i5q",
		"ICI5to" => "PLSOY8GuPHc0CcZ5DsBMX4u3gIKG87a6up",
		"IEL1ro" => "PLSOY8GuPHc0ABU9DTJ3u4IFXlPWtpE3Fc",
		"IEL2do" => "PLSOY8GuPHc0DQ3sghyebH3509oFmL61Hn",
		"IEL3ro" => "PLSOY8GuPHc0BUcYc7vMS0tkRQDkEat9vv",
		"IEM1ro" => "PLSOY8GuPHc0D1cIUQ6KE4Fa80VxzqlZGM",
		"IEM2do" => "PLSOY8GuPHc0DVtPWmPaY0PavhT8WINUuB",
		"IEM3ro" => "PLSOY8GuPHc0DIwhv2NBaOIrORDH1FafVc"
	];

	$bdEstados = [
		[ 
			"0=Bloqueda" 
		],[ 
			"ICI5to",
			"ICI6to",
			"IEM4to",
			"IEM5to",
			"IEL4to",
			"IEL5to",
			"IEL6to",
			"APublica",
			"1=BASIC"
		],[ 
			"ICI1ro",
			"ICI2do",
			"ICI3ro",
			"ICI4to",
			"IEM1ro",
			"IEL1ro",
			"IEM2do",
			"IEM3ro",
			"IEL2do",
			"IEL3ro",
			"PreIng_M",
			"PreIng_F",
			"PreIng_Q",
			"PreIngComA",
			"PreIngComB",
			"2=PRO"
		]
	];
	
	$bdZoomIDs = [ // BD de IDs de Aulas Zoom. 
		"aID/Cols"   => ["0=Bloqueda",  "1=BASIC"    , "2=PRO"      ],
		"PreIngComA" => ["96761370074", "97478835879", "97478835879"], // [a]
		"PreIngComB" => ["96761370074", "97478835879", "85335324777"], // [u1]
		"PreIng_M"   => ["96761370074", "97478835879", "97478835879"], // 18
		"PreIng_F"   => ["96761370074", "97478835879", "97478835879"], // 18
		"PreIng_Q"   => ["96761370074", "97478835879", "97478835879"], // 18
		"ICI1ro"     => ["96761370074", "879934863"  , "92023658063"], // 2
		"ICI2do"     => ["96761370074", "98072933701", "92781193701"], // 5
		"ICI3ro"     => ["96761370074", "97101886947", "92955020518"], // 8
		"ICI4to"     => ["96761370074", "94629812640", "95994613482"], // 11
		"ICI5to"     => ["96761370074", "99884405368", "99884405368"], // 14
		"ICI6to"     => ["96761370074", "95518301143", "95518301143"], // 17
		"IEM1ro"     => ["96761370074", "91277544291", "91277544291"], // 3
		"IEM2do"     => ["96761370074", "92086937597", "92086937597"], // 6
		"IEM3ro"     => ["96761370074", "94060234711", "92894001255"], // 9
		"IEM4to"     => ["96761370074", "92351175502", "92351175502"], // 12
		"IEM5to"     => ["96761370074", "96665531385", "96665531385"], // 15
		"IEL1ro"     => ["96761370074", "92116614010", "92116614010"], // 4
		"IEL2do"     => ["96761370074", "91667813566", "96130488690"], // 7
		"IEL3ro"     => ["96761370074", "98516961454", "98516961454"], // 10
		"IEL4to"     => ["96761370074", "97174449400", "97174449400"], // 13
		"IEL5to"     => ["96761370074", "98672429951", "98672429951"], // 16
		"IEL6to"     => ["96761370074", "91937629997", "91937629997"], // 18
		"APublica"   => ["96761370074", "435997049"  , "435997049"]
	];
		// "APublica" => [    2      , "96761370074", "435997049"  , ""           ]

	function getEstado($aID){
		global $bdEstados;
		$Estado = 0;
		foreach ($bdEstados as $aEst => $lista)
			if (in_array($aID, $lista))
				$Estado = $aEst;
		return $Estado;
	}
	function getNom($aID){
		global $bdNoms;
		return isset($bdNoms[$aID]) ? $bdNoms[$aID] : 0;
	}
	function getZoomDat($aID){
		global $bdZoomIDs;
		return isset($bdZoomIDs[$aID]) ? $bdZoomIDs[$aID] : 0;
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
			// echo '['.getEstado($aID).']';
			$aEst = getEstado($aID);

		// ID del Aula
			$aZoomID = $aZoomDat[$aEst];

		// Nombre del Aula
			$nSep = ['x', '~', '-'];
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

	// echo '<pre>'.print_r( $bdZoomIDs, true ).'</pre>';

	// exit;

 ?>