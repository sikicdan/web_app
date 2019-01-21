<?php
	$polje1 = array("prvi" => "jedan", "drugi" => "dva");
	$polje2 = array();
	
	foreach($polje1 as $vrijednost) {
		array_push($polje2, $vrijednost);
	}
	
	print_r($polje2);
?>

