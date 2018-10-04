<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: login.php');
    exit();
}
include "include/db_config.php";
$id = $_GET['id'];
$query10 = "SELECT * FROM content  WHERE conId = $id";
$result10 = mysqli_query($conn,$query10);
$row10 = mysqli_fetch_assoc($result10);
$selectedcontopId= $row10['topId'];

$query = "SELECT * FROM topic  WHERE topId = $selectedcontopId";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$selectedcontopName= $row['topName'];
$selectedconcourId= $row['courId'];


$query11 = "SELECT * FROM course  WHERE courId = $selectedconcourId";
$result11 = mysqli_query($conn,$query11);
$row11 = mysqli_fetch_assoc($result11);
$selectedconcourName= $row11['courName'];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <title>AAMEYS Portal Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<!--******************************* MAIN BODY OF THE PROJECT ***************************-->


<body class="fix-header fix-sidebar">

    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
			  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>

    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <!-- header header  -->
        <div class="header" style="">
            <?php include "include/top_nav.php"; ?>
        </div>
          <!--************************************ End header header ************************************************  -->
<!-- * -->
<!-- * -->
<!-- * -->
<!-- * -->
    <!--************************************ lEFT SIDEBAR*************************************************  -->
        <div class="left-sidebar" style="overflow: visible;">
            <!-- Sidebar scroll-->
            <?php include "include/side_nav.php"; ?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="min-height: 157px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Content</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="bulletin.php">Home</a></li>
                      <li class="breadcrumb-item active">Edit Content</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->



            <!--************************************ MAIN PAGE*************************************************  -->
            <!--************************************MAIN PAGE*************************************************  -->
            <!--*********************************** MAIN PAGE*************************************************  -->

            <!-- Container fluid  -->

            <div class="container-fluid">

                <!-- Start Page Content -->
                <div class="row justify-content-center">
                      <div class="col-lg-9">
                          <div class="card">
                              <div class="card-body">
                                  <div class="form-validation">
                                      <form action="#edit" class="form-valide" method="POST">


                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-Bsize">Content Course <span class="text-danger"></span></label>
                                                    <div class="col-lg-6">
                                                      <label class="col-form-label"><?php echo $selectedconcourName;?></label>
                                                    </div>

                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-Bsize">Content Topic <span class="text-danger"></span></label>
                                                    <div class="col-lg-6">
                                                      <label class="col-form-label"><?php echo $selectedcontopName;?></label>
                                                    </div>

                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-conDescrip"> Write Content<span class="text-danger">*</span></label>
                                                </div>
                                                <textarea id="conDescrip" name="conDescrip" style="width: 600px; height: 300px;"><?php echo $row10['conDescrip'];?>  </textarea>

                                                &nbsp;
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" name="submitbtn" class="btn btn-primary btn-flat">Submit</button>
                                                    </div>

                                                </div>

                                      </form>
                                      <div id="edit">
                                      <?php
                                              if(isset($_POST['submitbtn']))
                                              {
                                                $conDes= $_POST['conDes'];



                                              $query6= "UPDATE `content` SET `conDes` = ' $conDes' WHERE conId = ?";
                                              $stmt6 = mysqli_prepare($conn,$query6);
                                              mysqli_stmt_bind_param($stmt6,"i",$id) or die("unable to bind param");
                                              mysqli_stmt_execute($stmt6) or die("Unable to execute");
                                              if(mysqli_stmt_affected_rows($stmt6))
                                                  {
                                        ?>

                                        <div class="alert alert-success">
                                          <strong>Success! </strong> Content name is Updated.
                                        </div>
                                                  <script type='text/javascript'>
                                                    window.setTimeout(function(){
                                                      window.location = 'content.php';

                                                    } , 2000);
                                                  </script>
                                      <?php
                                                  }
                                                  else
                                                  {
                                                      echo "Something went wrong, Content details are not updated";
                                                  }
                                          }
                                      ?>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                <!-- End PAge Content -->
            </div>
            <!--  -->
            <!--***********************************-End Container fluid-************************************************  -->
            <!-- * -->
            <!-- * -->
            <!-- * -->
            <!-- * -->

            </div>


            <!--**********************************FOOTER*************************************************  -->
            <!--***********************************FOOTER*************************************************  -->
            <!--***********************************FOOTER**************************************************  -->



            <!--***********************************-End FOOTER*-************************************************  -->
            <!-- * -->
            <!-- * -->
            <!-- * -->
            <!-- * -->

        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->



    <!--********************************** All Jquery/JavaScript*************************************************  -->
    <!--*********************************** All Jquery/JavaScript*************************************************  -->

    <script src="js/lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>

    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>

    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- Form validation -->
    <script src="js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="js/lib/form-validation/jquery.validate-init.js"></script>

    <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
    </script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
</body>
</html>
