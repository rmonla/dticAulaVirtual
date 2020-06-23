<?php 

	$bdLnks = '{ 
		"bdCols"  : ["idZoom",      "idPlayList" ],
		"1roICI-" : ["92023658063", "PLSOY8GuPHc0Cwf44jcSVV9t54r0ykksRV" ]
		}';

	$bdLnks = json_decode($bdLnks);


	echo '<pre>'.print_r( $bdLnks, true ).'</pre>';
	echo $bdLnks->{'bdCols'};
	// echo $lnkDats->{'dticServTec'}
	// echo ( isset( $bdLnks->{'dticServTec'} ))? "Existe" : "NoExiste";

	exit;

 ?>