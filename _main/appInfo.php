<?php 

    define('APPAUT', 'Ricardo MONLA <rmonla@gmail.com>');
    define('APPDEV', 'https://github.com/rmonla/dticAulaVirtual');
    define('APPPUB', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual');

    define('APPNOM', 'dtcAulaVirtual');
    define('APPDET', '

      ## Servicio de aulas virtuales de la UTNLaRioja. ## 
      El objetivo principal es el de dar acceso a las clases no presenciales a los distintos integrantes de la comunidad educativa de la Facultad.

      ');

    $logVERs = [
      '3.5' => 'IDZOOM - Si no es entero el IDZ coloca URL y saca logo zoom.',
      '3.4' => 'bdAulas - Actualiza lista de aulas.',
      '3.3.1' => 'Sitio - Se publica en sitio sin problemas.',
      '3.2.5' => 'logVERs - Toma automáticamente el valor de versión desde la keys de logVERs.',
      '3.2.4' => 'Enlaces - Saca el icono sin playlist.',
      '3.2.3' => 'Enlaces - Agrega iconos de acceso a zoom y youtube.',
      '3.2.2' => 'bdAulas - Cambia nombres de aulas.',
      '3.2.1' => 'logVERs - Actualiza lista de logs de versiones.',
      '3.2.0' => 'bdAulas - Agrega Aula Pública Octógono.',
      '3.1.1' => 'Actualiza registros de la bdAulas.php',
      '3.0.3' => 'Optimiza y limpia código.',
      '3.0.2' => 'Divide en secciones de código HTML con las funciones getHTMLs.php.',
      '3.0.1' => 'Actualiza y re-genera la bdAULAs.php',
      '3.0.0' => 'Inicia codificación de la versión 3.0'
    ];
    
    $vers = array_keys($logVERs);
    
    define('APPVER', $vers[0]);

 ?>
