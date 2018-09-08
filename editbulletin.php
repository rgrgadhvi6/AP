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
$query = "SELECT * FROM bulletin WHERE bullId = $id";
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
                    <h3 class="text-primary">Edit Bulletin</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="bulletin.php">Home</a></li>
                      <li class="breadcrumb-item active">Edit Bulletin</li>
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
                                    <form id="uploadform" action="upload.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-fileToUpload">Bulletin Image <span class="text-danger"></span></label>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control,custom-file-label" name="fileToUpload" id="fileToUpload" value=""><?php echo $row['bullImage'];?>

                                        </div>
                                    </div>
                                    </form>
                                      <form action="#edit" class="form-valide" method="POST">

                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-bullTopic">Bulletin Topic <span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="bullTopic" name="bullTopic" value="<?php echo $row['bullTopic'];?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-bullDate">Bulletin Date<span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="date"class="form-control" id="bullDate" name="bullDate" data-provide="datepicker"value="<?php echo $row['bullDate'];?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-bullLocation">Bulletin Location <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="bullLocation" name="bullLocation" value="<?php echo $row['bullLocation'];?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-bullTime">Bulletin Time <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="bullTime" name="bullTime" value="<?php echo $row['bullTime'];?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-bullOther">Bulletin Extra Info <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="bullOther" name="bullOther" value="<?php echo $row['bullOther'];?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-bullContent">Bulletin Content<span class="text-danger">*</span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="bullContent" name="bullContent" value="<?php echo $row['bullContent'];?>">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-lg-4 col-form-label" for="val-bullReadMore">Bulletin Read More Link <span class="text-danger"></span></label>
                                              <div class="col-lg-6">
                                                  <input type="text" class="form-control" id="bullReadMore" name="bullReadMore" value="<?php echo $row['bullReadMore'];?>">
                                              </div>
                                          </div>


                                          <div class="form-group row">
                                              <div class="col-lg-8 ml-auto">
                                                  <button type="submit" name="submit" class="btn btn-primary btn-flat ">Submit</button>

                                              </div>

                                          </div>

                                        </div>



                                          <div id="edit">
                                          <?php
                                                  if(isset($_POST['submit']))
                                                  { $id = $_GET['id'];
                                                    $bullTopic=$_POST['bullTopic'];
                                                    $bullDate=$_POST['bullDate'];
                                                    $bullLocation=$_POST['bullLocation'];
                                                    $bullTime=$_POST['bullTime'];
                                                    $bullOther=$_POST['bullOther'];
                                                    $bullContent=$_POST["bullContent"];
                                                    $bullReadMore=$_POST['bullReadMore'];



                                                  $query3= "UPDATE `bulletin` SET `bullTopic`='$bullTopic',`bullDate`='$bullDate', `bullLocation`='$bullLocation',`bullTime`='$bullTime',
                                                  `bullOther`='$bullOther',`bullContent`='$bullContent',`bullReadMore`='$bullReadMore' WHERE bullId = ?";
                                                  $stmt3 = mysqli_prepare($conn,$query3);
                                                  mysqli_stmt_bind_param($stmt3,"i",$id) or die("unable to bind param");
                                                  mysqli_stmt_execute($stmt3) or die("Unable to execute");
                                                  if(mysqli_stmt_affected_rows($stmt3))
                                                      {
                                                      ?>
                                                                <div class="alert alert-success">
                                                                        <strong>Success! </strong> Bulletin Details are Updated.
                                                                </div>
                                                                <script type='text/javascript'>
                                                                    window.setTimeout(function()
                                                                    {window.location = 'bulletin.php';} , 3000);
                                                                </script>
                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                  ?>
                                                                  <strong>Details! </strong> Updated.
                                                                  <script type='text/javascript'>
                                                                      window.setTimeout(function()
                                                                      {window.location = 'bulletin.php';} , 1000);
                                                                  </script>
                                                                  <?php
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
    });
      $( "#menu_bulletin" ).addClass("active");
    </script>
      <script type="text/javascript">
    document.getElementById("fileToUpload").onchange = function() {
    document.getElementById("uploadform").submit();
      }
  </script>
</body>
</html>
