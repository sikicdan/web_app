<?php

	if ($_FILES["file"]["error"] > 0 or $_FILES["file"]["type"]!= "image/jpeg"){
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	} else{
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Tip: " . $_FILES["file"]["type"] . "<br>";
		echo "Velicina: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Spremljeno u: " . $_FILES["file"]["tmp_name"];
 } 
?>

