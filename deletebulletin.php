
<!DOCTYPE html>
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
$title = $row['bullTopic'];

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
                    <h3 class="text-primary"><?php echo $title;?></h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="bulletin.php">Home</a></li>
                      <li class="breadcrumb-item active">Delete Bulletin</li>
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

                <!-- <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                    <h4>Delete <b>Business</b></h4>
                  </div>
                        <div class="col-sm-6">
                        <a href="addbusinessform.php" class="btn btn-danger"><i class="material-icons"></i> <span>Delete All Details</span></a>


                        </div>
                        </div>
                    </div>
              </div> -->
        <div class="row justify-content-center">
                    <div class="col-md-9 ">
                        <div class="card">
                            <div class="card-body">

                              <div id="buttonalign">
                            <form action="#deleteBulletin" class="form-valide" method="post" novalidate="novalidate">
                                <button href="#deleteBulletin" type="submit" name="submit" class="btn btn-danger">
                                  <div class="row" id="customdelete" ><i class="material-icons"></i> Delete All Details</button> </div>
                              </div>
                              <div id="deleteBulletin">
                                <?php
                                $query4="DELETE FROM bulletin WHERE bullId=?";
                                $stmt4 = mysqli_prepare($conn,$query4);
                                if(isset($_POST['submit']))
                                {$_GET['id'];
                                  mysqli_stmt_bind_param($stmt4,"i",$_GET['id']);
                                  mysqli_stmt_execute($stmt4);

                                if(mysqli_stmt_affected_rows($stmt4))
                                {  ?>
                                  <div class="alert alert-success">
                                    &nbsp;
                                    <strong>Success! </strong> Bulletin Details are Deleted.
                                  </div>
                                            <script type='text/javascript'>
                                              window.setTimeout(function(){
                                                window.location = 'bulletin.php';

                                              } , 1000);
                                            </script>
                                <?php
                                            }
                                            else
                                            {
                                                echo "Something went wrong, Bulletin not Deleted";
                                            }
                                }
                                ?>
                          </form>

                              </div>



                        </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-md-9">
                              <div class="card ">


                                                                    <div class="card-body">
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Bulletin Topic </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['bullTopic'];?></h5></div>
                                                                      </div>
                                                                        <hr/>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Bulletin Date </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['bullDate'];?></h5></div>
                                                                      </div>
                                                                      <hr/>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Bulletin Extra Info </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['bullOther'];?></h5></div>
                                                                      </div>
                                                                        <hr/>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Bulletin Content </span></h5></div>
                                                                        <div class="col-8 "><h5 class="text-justify"><?php echo $row['bullContent'];?></h5></div>
                                                                      </div>
                                                                        <hr/>

                                  &nbsp;
                                  &nbsp;
                                  &nbsp;

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

    <script type="text/javascript">
    $(function () {
    });
      $( "#menu_bulletin" ).addClass("active");
    </script>
</body>
</html>
