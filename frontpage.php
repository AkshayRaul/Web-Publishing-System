<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid">

    <h1 class='jumbotron'>Welcome Reader <br></h1>

  <h3><p class="bg-primary">Read the articles below</p></h3>
  <?php
  $dir ="upload/";

  // Open a directory, and read its contents
  if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
          while (($file = readdir($dh)) == true) {
            $name=substr($file,0,strlen($file)-4);
            if($file!='.'&&$file!='..')
              echo "<h2><a class='btn btn-info' href='upload/".$file."'>$name</a></h2><br />";

          }
          closedir($dh);
      }
  }


  ?>
</div>

</body>
</html>
