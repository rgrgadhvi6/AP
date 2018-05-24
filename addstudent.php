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
                    <h3 class="text-primary">Add Student</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="bulletin.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="business.php">Student</a></li>
                        <li class="breadcrumb-item active">Add Student</li>
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
                      <div class="col-lg-10">
                          <div class="card">
                              <div class="card-body">
                                  <div class="form-validation">
                                      <form action="#add" class="form-valide" method="post">
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-stuFirstName">Student First Name <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="stuFirstName" name="stuFirstName" placeholder="Enter Student First Name..">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-stuLastName">Student Last Name <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="stuLastName" name="stuLastName" placeholder="Enter Student Last Name..">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-parentName">Student Parent Name <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="parentName" name="parentName" placeholder="Enter Student Parent Name..">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-flagged">Student Flagged as Dropout <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <select class="form-control" id="flagged" name="flagged">
                                                      <option value="No">No</option>
                                                      <option value="Yes">Yes</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-age">Student Age <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="age" name="age" placeholder="Student Age in Years">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-contact">Parent Contact <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="contact" name="contact" placeholder="0404XXXXXX">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-stuContact">Student Contact <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="stuContact" name="stuContact" placeholder="0404XXXXXX">
                                              </div>
                                          </div>


                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-email">Email Address <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="email" name="email" placeholder="student/parent@gmail.com">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-schoolName">School Name<span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="schoolName" name="schoolName" placeholder="Name of the School">
                                              </div>
                                          </div>


                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-schoolLocation">School Location <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="schoolLocation" name="schoolLocation" placeholder="Suburb Name..">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-schoolContact">School Contact <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="schoolContact" name="schoolContact" placeholder="0404XXXXXX">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-courseLevel">Course Level <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="courseLevel" name="courseLevel" placeholder="Primary,Secondary,Bachelor's Degree..">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-courseName">Course Name <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="courseName" name="courseName" placeholder="Year12, Bachelor's of Mechanical....">
                                              </div>
                                          </div>

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-reasonOfDropout">Reason for Dropout <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="reasonOfDropout" name="reasonOfDropout" placeholder="Please explain in detail">
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
                                          $stuFirstName=$_POST['stuFirstName'];
                                          $stuLastName=$_POST['stuLastName'];
                                          $parentName=$_POST['parentName'];
                                          $flagged=$_POST['flagged'];
                                          $age=$_POST['age'];
                                          $contact=$_POST["contact"];
                                          $stuContact=$_POST['stuContact'];
                                          $email=$_POST['email'];
                                          $schoolName=$_POST['schoolName'];
                                          $schoolLocation=$_POST['schoolLocation'];
                                          $schoolContact=$_POST['schoolContact'];
                                          $courseLevel=$_POST['courseLevel'];
                                          $courseName=$_POST['courseName'];
                                          $reasonOfDropout=$_POST['reasonOfDropout'];

                                            $query = "INSERT INTO `student`(`stuFirstName`, `stuLastName`, `parentName`, `email`, `contact`, `stuContact`, `age`, `schoolName`, `courseLevel`, `courseName`, `schoolContact`, `schoolLocation`, `reasonOfDropout`, `flagged`)
                                                      VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                                            $stmt = mysqli_prepare($conn,$query);
                                            mysqli_stmt_bind_param($stmt,"ssssssssssssss",$stuFirstName, $stuLastName, $parentName, $email, $contact, $stuContact, $age, $schoolName, $courseLevel, $courseName, $schoolContact, $schoolLocation, $reasonOfDropout, $flagged);
                                            mysqli_stmt_execute($stmt);
                                            if(($rows=mysqli_stmt_affected_rows($stmt))==1)
                                            {
                                                  ?>
                                                  <div class="alert alert-success">
                                                    <strong>Success! </strong> Student Details are Added.
                                                  </div>
                                                            <script type='text/javascript'>
                                                              window.setTimeout(function(){
                                                                window.location = 'student.php';

                                                              } , 4000);
                                                            </script>
                                                <?php
                                                            }
                                                            else
                                                            {
                                                                echo "Something went wrong, Student Detail(s) not updated";
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
