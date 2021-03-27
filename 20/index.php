<?php 
    include_once '_main/fxs.php';

    $appVer = "v.2.8.5";

    $grupos = '';
  
    //Ingeniería Electromecánica
      $aulas = '';
      $lstA = ['IEM1ro', 'IEM2do', 'IEM3ro', 'IEM4to', 'IEM5to']; 
      foreach ($lstA as $a) $aulas .= getAula($a);
      $grupos .= getGrupo('IEM', 'Ingeniería Electromecánica', $aulas);
  
    //Ingeniería Electrónica
      $aulas = '';
      $lstA = ['IEL1ro', 'IEL2do', 'IEL3ro', 'IEL4to', 'IEL5to', 'IEL6to']; 
      foreach ($lstA as $a) $aulas .= getAula($a);
      $grupos .= getGrupo('IEL', 'Ingeniería Electrónica', $aulas);
  
    //Octógono
      $grupos .= getGrupo('OCT', 'Octógono', getAula("APublica"));
  
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
  <!-- <meta http-equiv="Refresh" content="150"/> -->
  
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
                    <div class="align-right"><a href='./'><?php echo $appVer; ?></a></div>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    
                    <?php  
                      
    //Pre-Ingreso

      echo getGrupo('preingreso', 'Pre-Ingreso', getIframeCal('PREINGRESO'));
  
    //Ingeniería Civil
      $grups = '';
      $lstGs = ['ICI-1ro', 'ICI-2do', 'ICI-3ro', 'ICI-4to', 'ICI-5to', 'ICI-6to']; 
      foreach ($lstGs as $a) $grups .= getGrupo2($a, $a, getIframeCal($a));
      echo getGrupo('ICI', 'Ingeniería Civil', $grups);
  


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
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175446358-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-175446358-1');

  </script>
  
  
</body>
</html>