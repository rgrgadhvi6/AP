<!DOCTYPE html>
<html lang="en">
<?php include "include/db_config.php";
$id = $_GET['id'];
$query = "SELECT * FROM content WHERE conId = $id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
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
                                              <label class="col-lg-4 col-form-label" for="val-conTypeA"> Text Content A <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="conTypeA" name="conTypeA" value="<?php echo $row['conTypeA'];?>">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-conTypeB"> Text Content B <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="conTypeB" name="conTypeB" value="<?php echo $row['conTypeB'];?>">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-conTypeC"> Text Content C <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="conTypeC" name="conTypeC" value="<?php echo $row['conTypeC'];?>">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-conLinkA"> Link Content A <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="conLinkA" name="conLinkA" value="<?php echo $row['conLinkA'];?>">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-conLinkB"> Link Content B <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="conLinkB" name="conLinkB" value="<?php echo $row['conLinkB'];?>">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-conDes"> Content Description<span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="conDes" name="conDes" value="<?php echo $row['conDes'];?>">
                                              </div>
                                          </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="submit" class="btn btn-primary btn-flat ">Submit</button>
                                            </div>

                                        </div>

                                          <div id="edit">
                                          <?php
                                                  if(isset($_POST['submit']))
                                                  { $id = $_GET['id'];
                                                    $conDes= $_POST['conDes'];
                                                    $conTypeA = $_POST['conTypeA'];
                                                    $conTypeB = $_POST['conTypeB'];
                                                    $conTypeC = $_POST['conTypeC'];
                                                    $conLinkA = $_POST['conLinkA'];
                                                    $conLinkB = $_POST['conLinkB'];


                                                  $query3= "UPDATE `content` SET `conTypeA` = '$conTypeA',`conTypeB` = '$conTypeB',`conTypeC` = '$conTypeC',`conLinkA` ='$conLinkA' ,`conLinkB` = '$conLinkB',`conDes` = ' $conDes' WHERE conId = ?";
                                                  $stmt3 = mysqli_prepare($conn,$query3);
                                                  mysqli_stmt_bind_param($stmt3,"i",$id) or die("unable to bind param");
                                                  mysqli_stmt_execute($stmt3) or die("Unable to execute");
                                                  if(mysqli_stmt_affected_rows($stmt3))
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

                                      </form>
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
    })
    </script>
</body>
</html>
