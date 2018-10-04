<!DOCTYPE html>
<?php include "include/db_config.php";?>
<html lang="en">
<?php

$query = "SELECT * FROM bulletin ORDER BY bullDate DESC";
$result = mysqli_query($conn,$query);


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
    <title>AAMEYS Portal</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <script src="//platform-api.sharethis.com/js/sharethis.js#property=5b74e9d12cefcd001169758c&product=inline-share-buttons"></script> -->

</head>

<!--******************************* MAIN BODY OF THE PROJECT ***************************-->
<body class="fix-header fix-sidebar" data-gr-c-s-loaded="true">



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
            <?php include "include/publicside_nav.php"; ?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
  <div class="page-wrapper" style="min-height: 157px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Bulletin</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="publicbulletin.php">Home</a></li>

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


                <div class="row  justify-content-center">
                          <!-- Column -->
                          <?php

                            while($row = mysqli_fetch_assoc($result))
                            {
                              $sqldate=$row['bullDate'];
                                $Id=$row['bullId'];
                              $D = strtotime($sqldate);
                          ?>
                          <div class="col-lg-9">
                            <div class="card">

                                                <div class="sl-right">
                                                    <div> <h4 class="font-weight-bold"><?php echo $row['bullTopic'];?></h4> <i class="fa fa-clock-o">  </i><span class="sl-date"> <?php echo date("j M, Y", $D);?></span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-5 col-xs-12"><img src="<?php echo $row['bullImage'];?>" alt="user" class="img-responsive radius"></div>
                                                            <div class="col-md-7 col-xs-12">
                                                                <p class="text-justify"> <?php echo $row['bullContent'];?></p>   <a href="publicviewbulletin.php?id=<?php echo $row['bullId'];?>" class="btn btn-success"><i class="fa fa-commenting-o"></i> View</a>
                                                                <?php
                                                                if(!empty($row['bullReadMore']))
                                                                     {
                                                                 ?>
                                                                         <a href="<?php echo $row['bullReadMore'];?>" class="btn btn-success"><i class="fa fa-external-link"></i> Source</a>
                                                               <?php
                                                                    }
                                                                 ?>

                                                              </div>

                                                                  <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                                                    <!-- <div class="addthis_inline_share_toolbox"></div> -->
                                                        </div>

                                                    </div>
                                                </div>

                          </div>
                        </div>

                      <?php
                      }
                      ?>
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
    $(function(){
      $('[data-toggle="tooltip"]').tooltip();
      $( "#menu_bulletin" ).addClass("active");
    });
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b74ed39045eb12d"></script>

</body>
</html>
