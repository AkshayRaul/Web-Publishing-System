<?php

$typedtext=$_POST["text"];
$filename=$_POST["file"];
chdir("upload");
$myfile = fopen($filename.".txt", "w") or die("Unable to open file!");
fwrite($myfile, $typedtext);
fclose($myfile);
echo "file saved succesfully";
?>