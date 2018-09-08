<?php
include "include/db_config.php";

$target_dir = "images/bulletin/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
    $fileToUpload=$target_file;
    }
    ?>
