<?php

	if ($_GET("u") && $_GET("p")) {
		echo $_GET("u");
		echo $_GET("p");

	}
	else {
		# code...
		echo "<script> window.location.href = 'http://google.com' </script>";
	}
?>
