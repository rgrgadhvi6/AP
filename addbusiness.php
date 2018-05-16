<?php
include "include/db_config.php";
if(isset($_POST['submit']))
{
$busName=$_POST['busName'];
$busAddress=$_POST['busAddress'];
$busType=$_POST['busType'];
$busABN=$_POST['busABN'];
$busEmail=$_POST['busEmail'];
$busContact=$_POST["busContact"];
$busContactPerson=$_POST['busContactPerson'];
$busContactPersonRole=$_POST['busContactPersonRole'];
$busWebsite=$_POST['busWebsite'];
$busSize=$_POST['busSize'];

  $query = "INSERT INTO `business`(`busName`, `busAddress`, `busType`, `busABN`, `busEmail`, `busContact`, `busContactPerson`, `busContactPersonRole`, `busWebsite`, `busSize`)
            VALUES (?,?,?,?,?,?,?,?,?,?)";
  $stmt = mysqli_prepare($conn,$query);
  mysqli_stmt_bind_param($stmt,"ssssssssss",$busName, $busAddress, $busType, $busABN, $busEmail, $busContact, $busContactPerson, $busContactPersonRole, $busWebsite, $busSize);
  mysqli_stmt_execute($stmt);
  if(($rows=mysqli_stmt_affected_rows($stmt))==1)
  {
        ?><div class="alert alert-success">
          <strong>Success! </strong> Business Details are Added.
        </div>
                  <script type='text/javascript'>
                    window.setTimeout(function(){
                      window.location = 'business.php';

                    } , 4000);
                  </script>
      <?php
                  }
                  else
                  {
                      echo "Something went wrong, business not Added";
                  }
}
      ?>
