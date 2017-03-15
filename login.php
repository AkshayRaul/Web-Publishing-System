<?php

$name=$_POST["user"];
$pass=$_POST["pass"];
if($name=="reader")
{
header("Location:frontpage.php");
}else{
header("Location:writer.html");
}

?>