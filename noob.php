<?php

$file = fopen("README.md","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

?>
