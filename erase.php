<?php
$myfile = fopen("data.json", "w") or die("Unable to open file!");
fwrite($myfile, "");

fclose($myfile);
?>
