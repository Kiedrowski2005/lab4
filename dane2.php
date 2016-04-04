<?php

require('simple_html_dom.php');

$html = file_get_html("http://chojnice24.pl/");


foreach($html->find('div[id=r_lotto]') as $element) 
       echo $element;
	   
foreach($html->find('div[id=r_waluty]') as $element) 
       echo $element;
	   	   
foreach($html->find('div[id=r_sonda]') as $element) 
       echo $element;
	   //echo $html;


?>

