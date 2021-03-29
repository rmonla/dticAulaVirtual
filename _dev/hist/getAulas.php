<?php 





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
	function getAula2($aID){
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