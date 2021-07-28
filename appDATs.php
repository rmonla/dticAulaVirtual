<?php 
/* «® CONSTANTES  ®» */
    define('APPAUT', '«®» Ricardo MONLA <rmonla@gmail.com> «®»');
    define('APPDEV', 'https://github.com/rmonla/dticAulaVirtual');
    define('APPPUB', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual');

    define('APPNOM', 'dtcAulaVirtual');
    define('APPDET', '

      «®» Servicio de aulas virtuales de la UTNLaRioja. «®» 
      El objetivo principal es el de dar acceso a las clases no presenciales a los distintos integrantes de la comunidad educativa de la Facultad.

      ');

/* «® LOGS  ®» */
    $logVERs = ' => 
      3.5.4 => ADIGITAL: Agrega redireccfionador al canal Youtube y a la planilla tituladora.
      3.5.3 => appDATs: Modifica como se obtiene la versión
      3.5.2 => INDEX: Modifica includes
      3.5.1 => MAIN: Agrega appINCS.php, appDATS.php
      ';
    
    $appVer = explode(" => ", $logVERs);
    $appVer = trim($appVer[1]);
    
    define('APPVER', $appVer);

 ?>
