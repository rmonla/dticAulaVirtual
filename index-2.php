<?php 
    include_once '_main/fxs.php';

    $grupos = '';
    //Pre-Ingreso
      $aulas = '';
      $lstA = ['Matemática', 'Física', 'Química']; 
      foreach ($lstA as $a) $aulas .= getAula($a);
      $grupos .= getGrupo('preingreso', 'Pre-Ingreso', $aulas);
  
    //Ingeniería Civil
      $aulas = '';
      $lstA = ['1roICI', '2doICI', '3roICI', '4toICI', '5toICI', '6toICI']; 
      foreach ($lstA as $a) $aulas .= getAula($a);
      $grupos .= getGrupo('ICI', 'Ingeniería Civil', $aulas);
  
    //Ingeniería Electromecánica
      $aulas = '';
      $lstA = ['1roIEM', '2doIEM', '3roIEM', '4toIEM', '5toIEM']; 
      foreach ($lstA as $a) $aulas .= getAula($a);
      $grupos .= getGrupo('IEM', 'Ingeniería Electromecánica', $aulas);
  
    //Ingeniería Electrónica
      $aulas = '';
      $lstA = ['1roIEL', '2doIEL', '3roIEL', '4toIEL', '5toIEL', '6toIEL']; 
      foreach ($lstA as $a) $aulas .= getAula($a);
      $grupos .= getGrupo('IEL', 'Ingeniería Electrónica', $aulas);
  
    //Octógono
      $grupos .= getGrupo('OCT', 'Octógono', getAula('Aula Pública'));
  
    //Dpto. Carreras a Término
      $grupos .= getGrupo('CATERM', 'Dpto. Carreras a Término', getIframeCal('CATERM'));
  
    //Dpto. PosGrados
      $grupos .= getGrupo('POSG', 'Dpto. PosGrados', getIframeCal('POSG'));
  
    //Eventos Agendados
      $grupos .= getGrupo('EVENTOS', 'Eventos Agendados', getIframeCal('EVENTOS'));

?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/dticAulaVirtual.png" type="image/x-icon">
  <meta name="description" content="">
  <meta http-equiv="Refresh" content="30"/>
  
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
<body>
  <section class="accordion1 cid-rKzC2nyguD" id="accordion1-0">

    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2"
                    >Aulas Virtuales - UTNLaRioja</h2>
                    <div class="align-right"><a href='index.php'>Ver vers1.0</a></div>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    
                    <?php  
                      
                      echo $grupos;
                    
                    ?>
                </div>
              </div>
          </div>
      </div>
    </section>


  <section class="engine"><a href="https://mobirise.info/a">online website builder</a></section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>