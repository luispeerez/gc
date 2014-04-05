<?php 
$allowedExts = array("gif", "jpeg", "jpg", "png");
echo "EL nombre del archivo : ".$_FILES["file"]["name"];
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
/*&& ($_FILES["file"]["size"] < 20000)*/
&& in_array($extension, $allowedExts))
{
  if ($_FILES["file"]["error"] > 0){
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  }
  else{
    if (file_exists("../upload/" . $_FILES["file"]["name"])){
      echo $_FILES["file"]["name"] . " already exists. ";
    }
    else{
      unlink('../img/bg/bg1.jpg');
      unlink('../img/bg/bg1.png');
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../img/bg/" . 'bg1.' . $extension);
      }
      header('Location: /cambiarbg.php');

  }
}
else{
  echo "Invalid file";
}

?>