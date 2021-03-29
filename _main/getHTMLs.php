<?php  
function procAulas(){
	global $bdAULAs;
	
	$bdProc = [];

	foreach ($bdAULAs as $aula) {
		$grup = $aula[0];
		// Si no está el indice de grupo lo genero.
		if ( !isset($bdProc[$grup]) ) $bdProc[$grup] = [];
		// Cargo los demas valores como nueva aula del grupo.
		$bdProc[$grup][] = array_slice($aula,4);

	}
	return $bdProc;
}

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

function getAulas($bdAus = []){

	// Html de enlaces.
		$hAus = '';

	foreach ($bdAus as $au) {
		$aAu = [];
		//$hAu = '';

		// $au = [IDPLIST, IDCAL, IDZOOM, NOMBRE];
		list($aIDPLIST, $aIDCAL, $aIDZOOM, $aNOMBRE) = $au;


		$urlZ = "https://zoom.us/j/$aIDZOOM";
		$aAu[] = "<a target='_blank' href='$urlZ'>$aNOMBRE</a>";
		
		$hImg = "<img src='_imgs/logoZoom.png' alt='Acceso Zoom' style='width:42px;height:42px;'>";
		$aAu[] = "<a target='_blank' href='$urlZ'>$hImg</a>";
		
		if ( $aIDPLIST != '' ) {
			$urlY = "https://www.youtube.com/playlist?list=$aIDPLIST";
			$hImg = "<img src='_imgs/logoYTB.png' alt='Clases Grabadas' style='width:42px;height:42px;'>";
			$aAu[] = "<a target='_blank' href='$urlY'>$hImg</a>";
		}

		$hAu = implode(" ", $aAu);
		$hAus .= "<p class='align-center' mbr-fonts-style panel-text display-7'>$hAu</p>";

	}
	return $hAus;
}

function getCont(){
	$hCont = '';
	$bdAs = procAulas();

	foreach ($bdAs as $grup => $bdAus) {
		
		list($gNom, $gCod) = explode(" | ", $grup);
		
		$hCont .= getGrupo( $gCod, $gNom, getAulas($bdAus) );
	
	}

	return $hCont;
}

function getBody(){
  $appver = APPVER;
  $hCont = getCont();
  
  return <<<HTML
	<body>
		<section class="accordion1 cid-rKzC2nyguD" id="accordion1-0">
		  <div class="container">
		      <div class="media-container-row">
		          <div class="col-12 col-md-8">
		              <div class="section-head text-center space30">
		                  <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2"
		                  >Aulas Virtuales - UTNLaRioja</h2>
		                  <div class="align-right">
		                  	<a href='#'>$appver</a>
		                  	</div>
		              </div>
		              <div class="clearfix"></div>
		              <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
		                  
		                  $hCont
		              
		              </div>
		            </div>
		        </div>
		    </div>
		  </section>
		<section class="engine">
			<a href="https://mobirise.info/a">online website builder</a></section>
		<script src="assets/web/assets/jquery/jquery.min.js"></script>
		<script src="assets/popper/popper.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/tether/tether.min.js"></script>
		<script src="assets/smoothscroll/smooth-scroll.js"></script>
		<script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
		<script src="assets/theme/js/script.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175446358-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-175446358-1');
		</script>
	</body>
HTML;
}

function getHead(){
  return <<<HTML
	<head>
	  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	  <link rel="shortcut icon" href="assets/images/dticAulaVirtual.png" type="image/x-icon">
	  <meta name="description" content="">
	  <meta http-equiv="Refresh" content="150"/>
	  
	  <title>Aulas Virtuales - UTNLaRioja</title>
	  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
	  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
	  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
	  <link rel="stylesheet" href="assets/tether/tether.min.css">
	  <link rel="stylesheet" href="assets/theme/css/style.css">
	  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
	  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
	</head>
HTML;
}

function getPag(){
  
  $hHead = getHead(); 
  $hBody = getBody();
  //$hBody = getBody();

  return <<<HTML
	<!DOCTYPE html>
	<html>
		<head>
			$hHead
		</head>
		</body>
			$hBody
		</body>
	</html>
HTML;
}

?>