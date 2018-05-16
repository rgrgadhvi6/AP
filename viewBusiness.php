<!DOCTYPE html>
<html lang="en">
<?php include "include/db_config.php";
$id = $_GET['id'];
$query = "SELECT * FROM business WHERE busId = $id";
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
                    <h3 class="text-primary"><?php echo $row['busName'];?></h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Businesses</li>
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
                      <div class="col-md-12">
                              <div class="card">
                                  <div class="card-body">
                                      <h4 class="card-title">Business Details</h4>
                                      <!-- Nav tabs -->
                                      <ul class="nav nav-tabs" role="tablist">
                                          <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home8" role="tab" aria-selected="true"><span><i class="ti-home"></i></span></a> </li>
                                          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile8" role="tab" aria-selected="false"><span><i class="ti-user"></i></span></a> </li>
                                          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages8" role="tab" aria-selected="false"><span><i class="ti-email"></i></span></a> </li>
                                      </ul>
                                      <!-- Tab panes -->
                                      <div class="tab-content tabcontent-border">
                                          <div class="tab-pane active show" id="home8" role="tabpanel">
                                                <div class="p-20">
                                                  <div class="row">
                                                            <!-- Column -->
                                                            <div class="col-lg-4">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="card-two">
                                                                            <header>
                                                                                <div class="avatar">
                                                                                    <img src="https://c1.staticflickr.com/1/22/34368753_05c4bee447.jpg" alt="">
                                                                                </div>
                                                                            </header>

                                                                            <h3></span><?php echo $row['busName'];?></h3>
                                                                            <div>
                                                                              &nbsp;

                                                                            </div>
                                                                            <div class="contacts" >
                                                                                <br>
                                                                                <a href=""><i class="fa fa-phone"></i></a>
                                                                                <a href=""><i class="fa fa-envelope"></i></a>
                                                                                <a href=""><i class="fa fa-map-marker"></i></a>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- Column -->



                                                            <div class="col-lg-8">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">ID: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busId'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Type: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busType'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Email: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busEmail'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">ABN: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busABN'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Contact: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busContact'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Contact Person: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busContactPerson'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Contact Person Role: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busContactPersonRole'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Address: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busAddress'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Website: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busWebsite'];?></h5></div>
                                                                      </div>
                                                                      <div class="row">
                                                                        <div class="col-4"><h5><span class="text-primary">Size: </span></h5></div>
                                                                        <div class="col-8"><h5><?php echo $row['busSize'];?></h5></div>
                                                                      </div>
                                                                        &nbsp;

                                                                    </div>
                                                                </div>
                                                              </div>
                                                  </div>
                                                </div>
                                          </div>
                                          <div class="tab-pane p-20" id="profile8" role="tabpanel">
                                                <div class="row">
                                                      <div class="col-12">
                                                          <div class="card">
                                                              <div class="card-body"> <h5><span class="text-primary">Contact Person: </span><?php echo $row['busContactPerson'];?></h5></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <div class="card">
                                                              <div class="card-body"> <h5><span class="text-primary">Contact Person: </span><?php echo $row['busContactPersonRole'];?></h5></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <div class="card">
                                                              <div class="card-body"> <h5><span class="text-primary">Contact: </span><?php echo $row['busContact'];?></h5></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                        </div>
                                          <div class="tab-pane p-20" id="messages8" role="tabpanel"> Coming Soon..........
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
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</body>
</html>
