<!DOCTYPE html>
<html lang="en">
<?php include "include/db_config.php"; ?>
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
                    <h3 class="text-primary">Add Business</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="bulletin.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="business.php">Business</a></li>
                        <li class="breadcrumb-item active">Add Business</li>
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
                                      <form action="#add" class="form-valide" method="post">
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-busname">Business Name <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busname" name="busName" placeholder="Enter Business Name..">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Baddress">Business Address <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busAddress" name="busAddress" placeholder="404 Wests Street, Albion 3032">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Btype">Business Type <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busType" name="busType" placeholder="Bakery, Accounting, IT, Retail etc..">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Bphone">Business Contact <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busContact" name="busContact" placeholder="7534575785">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Bemail">Business Email Address <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busEmail" name="busEmail" placeholder="bakeryalson@hotmail.com..">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Babn">Business ABN <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busABN" name="busABN" placeholder="5745463545345">
                                              </div>
                                          </div>


                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Bcontactperson">Business Contact Person <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busContactPerson" name="busContactPerson" placeholder="Contact Person Name..">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Bcontactpersonrole">Business Contact Person Role<span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busContactPersonRole" name="busContactPersonRole" placeholder="Owner, Managing Director etc..">
                                              </div>
                                          </div>


                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Bwebsite">Business Website <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="busWebsite" name="busWebsite" placeholder="http://example.com">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-Bsize">Business Size <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <select class="form-control" id="busSize" name="busSize">
                                                      <option value="NOT-GIVEN">Please select</option>
                                                      <option value="Small">Small</option>
                                                      <option value="Medium">Medium</option>
                                                      <option value="Big">Big</option>
                                                  </select>
                                              </div>
                                          </div>

                                          </div>

                                          <div class="form-group row">
                                              <div class="col-lg-8 ml-auto">
                                                  <button type="submit" name="submit" class="btn btn-primary btn-flat ">Submit</button>
                                              </div>

                                          </div>
                                          <div id="add">
                                          <?php

                                          if(isset($_POST['submit']))
                                          {
                                          $busName=$_POST['busName'];
                                          $Uid=1;

                                          $busAddress=$_POST['busAddress'];
                                          $busType=$_POST['busType'];
                                          $busABN=$_POST['busABN'];
                                          $busEmail=$_POST['busEmail'];
                                          $busContact=$_POST["busContact"];
                                          $busContactPerson=$_POST['busContactPerson'];
                                          $busContactPersonRole=$_POST['busContactPersonRole'];
                                          $busWebsite=$_POST['busWebsite'];
                                          $busSize=$_POST['busSize'];

                                            $query = "INSERT INTO `business`(`busName`,`UId`, `busAddress`, `busType`, `busABN`, `busEmail`, `busContact`, `busContactPerson`, `busContactPersonRole`, `busWebsite`, `busSize`)
                                                      VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                                            $stmt = mysqli_prepare($conn,$query);
                                            mysqli_stmt_bind_param($stmt,"sisssssssss",$busName,$Uid, $busAddress, $busType, $busABN, $busEmail, $busContact, $busContactPerson, $busContactPersonRole, $busWebsite, $busSize);
                                            mysqli_stmt_execute($stmt);
                                            if(($rows=mysqli_stmt_affected_rows($stmt))==1)
                                            {
                                                  ?><div class="alert alert-success">
                                                    <strong>Success! </strong> Business Details are Added.
                                                  </div>
                                                            <script type='text/javascript'>
                                                              window.setTimeout(function(){
                                                                window.location = 'business.php';

                                                              } , 3000);
                                                            </script>
                                                <?php
                                                            }
                                                            else
                                                            {
                                                                echo "Something went wrong, business not updated";
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
