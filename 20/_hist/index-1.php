<?php 
    include_once '_main/fxs.php';
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
                <div class="align-right"><a href='index-2.php'>Ver vers2.0</a></div>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    
                    <div class="card"> <!-- Civil -->
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_0" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Ingeniería Civil
                                  </h4>
                              </a>
                          </div>
                        <div id="collapse1_0" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">
                                
                                <?php  
                                  $lstA = ['1roICI', '2doICI', '3roICI', '4toICI', '5toICI', '6toICI']; 
                                  foreach ($lstA as $a) echo getAula($a);
                                ?>

                              </div>
                          </div>
                    </div>
                    
                    <div class="card"> <!-- Electromecánica -->
                        <div class="card-header" role="tab" id="headingTwo">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_0" aria-expanded="false" aria-controls="collapse2">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Ingeniería Electromecánica
                               </h4>
                            </a>
                            
                        </div>
                        <div id="collapse2_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">
                                
                                <?php  
                                  $lstA = ['1roIEM', '2doIEM', '3roIEM', '4toIEM', '5toIEM']; 
                                  foreach ($lstA as $a) echo getAula($a);
                                ?>

                            </div>
                        </div>
                    </div>
                    
                    <div class="card"> <!-- Electrónica -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse3_0" aria-expanded="false" aria-controls="collapse3">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Ingeniería Electrónica
                                </h4>
                            </a>
                        </div>
                        <div id="collapse3_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">
                                
                                <?php  
                                  $lstA = ['1roIEL', '2doIEL', '3roIEL', '4toIEL', '5toIEL', '6toIEL']; 
                                  foreach ($lstA as $a) echo getAula($a);
                                ?>

                            </div>
                        </div>
                    </div>
                    
                    <div class="card"> <!-- Octógono -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse4_0" aria-expanded="false" aria-controls="collapse4">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Octógono
                                </h4>
                            </a>
                        </div>
                        <div id="collapse4_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">

                                <?php echo getAula("APublica"); ?>

                            </div>
                        </div>
                    </div>

                    <div class="card"> <!-- Carreras a Término -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse5_0" aria-expanded="false" aria-controls="collapse5">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Dpto. Carreras a Término
                                </h4>
                            </a>
                        </div>
                        <div id="collapse5_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">

                                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FArgentina%2FLa_Rioja&amp;src=bnRiNjMzODcxZnBodXZuM2ZtYnBoaGdyNHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23B39DDB&amp;mode=AGENDA" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="card"> <!-- PosGrados -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse6_0" aria-expanded="false" aria-controls="collapse6">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Dpto. PosGrados
                                </h4>
                            </a>
                        </div>
                        <div id="collapse6_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">

                                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FArgentina%2FLa_Rioja&amp;src=OGEzNWE2b2V2NmdrMjljZXBpcXAyOG9wZ2NAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23B39DDB&amp;mode=AGENDA" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="card"> <!-- Eventos -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse7_0" aria-expanded="false" aria-controls="collapse7">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    Eventos Agendados
                                </h4>
                            </a>
                        </div>
                        <div id="collapse7_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_0">
                            <div class="panel-body p-4">

                                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FArgentina%2FLa_Rioja&amp;src=a2hhcjVxanZlbTdrMjdwZWsyMmxkcWJrZ2dAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23B39DDB&amp;mode=AGENDA" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                                
                            </div>
                        </div>
                    </div>
                
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