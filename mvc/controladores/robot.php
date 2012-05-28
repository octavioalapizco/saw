<?php
	$myFile = "testFile.txt";
	$fh = fopen($myFile, 'a');
	$stringData = date ( 'd/m/Y H:i:s', time()  ).'\n';
	fwrite($fh, $stringData);	
	fclose($fh);
	
?>