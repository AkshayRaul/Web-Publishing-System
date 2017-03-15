<?php
echo "<h1>Welcome Reader <br></h1>";
echo "<b><h3>Read the articles below</h3></b>";
echo "<br>";
echo "<br>";
echo "<h2><a href='ignorance.html'>Ignorance is bliss</a></h2>";
echo "<br>";
echo "<h2><a href='intelligence.html'>It is dangerous to trust only intelligence</a></h2>";
echo "<h2>Files in upload directory</h2>";
$files=scandir('upload',1);
for ($i=0;$i<sizeof($files)-2;$i++)
	echo "<a href=upload/".$files[$i].">".$files[$i]."</a><br>";

?>