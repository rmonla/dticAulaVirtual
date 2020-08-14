<?php  
	include_once 'src/simple_html_dom.php';
	include_once 'bdCals.php';


	function getHtml($url) {
		return file_get_contents($url);
	}
	
	function domObj($idCal) {
		return str_get_html(htmlDeUrl(getUrlCal($idCal, 1)));
	}

		// file_get_html(htmlDeUrl(getUrlCal($idCal, 1)));
	$url     = getUrlCal('ICI', 1);
	$strHTML = htmlDeUrl($url);
	$calICI  = str_get_html($strHTML);

	echo '<pre>';
	var_dump($calICI);
	echo '</pre>';


	// foreach ($calICI->find("div .date") as $el) echo $el->src.'<br>';
	// 
	$dom = new DomDocument();
	$dom->load($filePath);
	$finder = new DomXPath($dom);
	$classname="my-class";
	$nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");


	//+++
	include 'includes/simple_html_dom.php';

	$doc = str_get_html($html);
	$href = $doc->find('.lastPage')[0]->href;

?>
