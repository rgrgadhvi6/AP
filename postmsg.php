<?php
include "include/db_config.php";
if(isset($_POST['submitmsg']))
{
$senId=4 ;
$recId=5;
$message= $_POST['message'];
  $query7 = "INSERT INTO `message` (`senId`,`recId`,`message`)
            VALUES (?,?,?)";
  $stmt7 = mysqli_prepare($conn,$query7);
  mysqli_stmt_bind_param($stmt7,"iis",$senId,$recId,$message)or die("unable to bind param");
  mysqli_stmt_execute($stmt7)or die("Unable to execute");
  if(($rows7=mysqli_stmt_affected_rows($stmt7))==1)
    {
      header("location:javascript://history.go(-1)");
    }
    else
    {
        echo "Something went wrong, message not sent";
    }
}
      ?>
