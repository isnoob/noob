<?php

	if ($_GET("u") && $_GET("p")) {
		echo $_GET('u');
echo "\n";
echo $_GET('p');
echo "\n";

	}
	else {
		# code...
		echo "<script> window.location.href = 'http://google.com' </script>";
	}
?>
