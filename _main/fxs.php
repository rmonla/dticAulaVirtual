<?php 
	include_once 'bdatos.php';


	/**
	 * Genera el html de enlace de un aula a partir de in ID que se encuentra en la base de datos.
	 * @param  string $id ID del Aula
	 * @return string     HTML de acceso al Aula.
	 */
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

		return <<<HTML
		<p class='mbr-fonts-style panel-text display-7'><a target='_blank' href='https://zoom.us/j/$idZ'>$id</a>$idP</p>
HTML;
	}
	
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


?>