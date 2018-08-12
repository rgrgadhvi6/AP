<!DOCTYPE html>
<?php include "include/db_config.php";?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <title>AAMEYS Portal</title>


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
                    <h3 class="text-primary">Business</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="publicbulletin.php">Home</a></li>
                        <li class="breadcrumb-item active">Business</li>
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

                  <?php
                    $query = "SELECT * FROM course";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($result))
                    {
                      $courName=$row['courName'];
                      $ccourId=$row['courId'];
                  ?>
                  <p>
                        <div class="col-md-7" data-toggle="collapse" href="#<?=$ccourId?>"  data-parent="#<?=$ccourId?>" role="button" aria-expanded="false" aria-controls="#<?=$ccourId?>">
                            <div class="card bg-primary p-20">
                                <div class="media widget-ten">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-book f-s-40"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 class="color-white"><?php echo $courName; ?></h2>
                                        <?php
                                        $query2 = "SELECT * FROM topic WHERE courId= $ccourId ";
                                        $result2 = mysqli_query($conn,$query2);
                                        $count= mysqli_num_rows($result2);
                                        ?>
                                        <p class="m-b-0"><?php echo $count; ?> Topic(s)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>


                    <div class="col-md-7">
                    <div class="collapse" aria-expanded="false" id="<?=$ccourId?>">
                      <div class="card card-body">
                        <ul class="list-icons">
                          <?php
                          while($row2 = mysqli_fetch_assoc($result2))
                          {
                          $topName=$row2['topName'];
                          $tcourId=$row2['courId'];
                          $count= mysqli_num_rows($result2);
                          ?>
                          <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i><?php echo $topName; ?></a></li>
                          <?php
                            }
                           ?>
                        </ul>
                      </div>
                    </div>
                  </div>


              <?php
                }
               ?>



              </div>
        </div>
    </div>

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
    $(function(){
      $('[data-toggle="tooltip"]').tooltip();
    
    });
    </script>
</body>
</html>
