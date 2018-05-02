<?php include "include/db_config.php";
$query="DELETE FROM business WHERE busId=?";
$stmt = mysqli_prepare($conn,$query);
if(isset($_GET['id']))
{
  mysqli_stmt_bind_param($stmt,"i",$_GET['id']);
  mysqli_stmt_execute($stmt);
}
if(mysqli_stmt_affected_rows($stmt))
{
  echo "<p> Business Deleted</P>";
  $page = $_SERVER['PHP_SELF'];
  $sec= "1";
  header("Refresh: $sec; url=$page");
}
	// else {header("Location: index.php");}
?>
