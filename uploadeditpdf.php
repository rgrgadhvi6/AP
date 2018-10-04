<?php
include "include/db_config.php";
$id = $_GET['id'];
$target_dir = "images/bulletin/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
    $fileToUpload=$target_file;
    $query3= "UPDATE `bulletin` SET `bullImage`='$fileToUpload' WHERE bullId = ?";
    $stmt3 = mysqli_prepare($conn,$query3);
    mysqli_stmt_bind_param($stmt3,"i",$id) or die("unable to bind param");
    mysqli_stmt_execute($stmt3) or die("Unable to execute");
    header("location:javascript://history.go(-1)");
  }
      ?>
