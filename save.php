
<?php

$typedtext=$_POST["parameters"];
$fname=$_POST["filename"];

file_put_contents('upload/'.$fname.'.txt', $typedtext);
echo "Your file has been uploaded";
?>
