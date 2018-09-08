<!DOCTYPE html>
<html lang="en">
<?php
session_start();

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
                    <h3 class="text-primary"><?php echo $row['bullTopic'];?></h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="publicbulletin.php">Home</a></li>
                      <li class="breadcrumb-item active">View Bulletin</li>

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
                                                                <p class="text-justify"> <?php echo $row['bullContent'];?></p> <a href="<?php echo $row['bullReadMore'];?>" class="btn btn-success"><i class="fa fa-external-link"></i> Source</a>
                                                                  <hr><div class="addthis_inline_share_toolbox"></div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                              </div>
                                                        <br/>
                                                      <div class="col-md-7 col-xs-12">
                                                        <button class="btn btn-success" data-toggle="collapse" href="#addcomment" role="button" aria-expanded="false" aria-controls="addcomment">
                                                             Add Comment
                                                           </button>
                                                      </div>
                                                        <div class="col-md-12">
                                                        <div class="collapse" aria-expanded="false" id="addcomment">
                                                          <div class="card card-body">
                                                            <form action="#add" class="form-valide" method="post">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-4 col-form-label" for="val-firstname">First Name <span class="text-danger">*</span></label>
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-4 col-form-label" for="val-lastname">Last Name <span class="text-danger">*</span></label>
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-4 col-form-label" for="val-email">First Name <span class="text-danger">*</span></label>
                                                                    <div class="col-lg-6">
                                                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                                                                    </div>
                                                                </div>
                                                                <textarea id="comDescrip"  name="comDescrip" class="col-md-12 col-xs-9" placeholder="Please leave your thought on above bulletin..."></textarea>

                                                                <button type="submit" name="submitpost" class="btn btn-success green"><i class="fa fa-share"></i> Post</button>

                                                                <div id="add">
                                                                <?php

                                                                if(isset($_POST['submitpost']))
                                                                {

                                                                  $comDescrip=	$_POST['comDescrip'];
                                                                  $firstname= $_POST['firstname'];
                                                                  $lastname= $_POST['lastname'];
                                                                  $useremail= $_POST['email'];

                                                                  $query = "INSERT INTO `comment`(`bullId`, `firstname`,`lastname`,`email`, `comDescrip`)
                                                                            VALUES (?,?,?,?,?)";
                                                                  $stmt = mysqli_prepare($conn,$query);
                                                                  mysqli_stmt_bind_param($stmt,"issss",$id, $firstname,$lastname ,$useremail, $comDescrip);
                                                                  mysqli_stmt_execute($stmt);
                                                                  if(($rows=mysqli_stmt_affected_rows($stmt))==1)
                                                                  {
                                                                  ?>

                                                                        <div class="alert alert-success">
                                                                        <strong>Success! </strong> Comment Posted.
                                                                        </div>
                                                                                  <script type='text/javascript'>
                                                                                  window.setTimeout(function()
                                                                                  {
                                                                                  window.location = 'publicviewbulletin.php?id=<?php echo $id?>'

                                                                                    } , 2000);
                                                                                  </script>

                                                                      <?php
                                                                    }
                                                                                  else
                                                                                  {
                                                                                      echo "Something went wrong, Comment not Posted";

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

                        <div class="col-lg-9">

                          <?php
                          $query2 = "SELECT * FROM comment WHERE bullId= $id";
                          $result2 = mysqli_query($conn,$query2);
                          $count= mysqli_num_rows($result2);
                          ?>
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul>

                                <li class="nav-item"> <a class="nav-link active show" style="color:#99abb4 !important;"> <i class="fa fa-comment-o text-info" style="color:#99abb4 !important;"> </i> &nbsp;<?php echo $count ?>&nbsp;Comment(s)</a> </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active show" id="home" role="tabpanel">
                                    <div class="card-body">
                                      <?php
                                      while($row2 = mysqli_fetch_assoc($result2))
                                      {
                                        $ComDate=$row2['ComDate'];
                                        $D2 = strtotime($ComDate);
                                        $comDescrip=$row2['comDescrip'];
                                        $firstname= $row2['firstname'];
                                        $lastname= $row2['lastname'];
                                        $useremail= $row2['email'];

                                      ?>
                                        <div class="profiletimeline">

                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="images/users/5.jpeg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">



                                                    <div><a class="link"><?php echo $firstname." ".$lastname;?></a> <div class="sl-date">  <?php echo date("j M, Y", $D2);?></div>
                                                        <p class="text-justify m-t-10"><?php echo $comDescrip;?> </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr>


                                        </div>
                                        <?php
                                          }
                                         ?>
                                    </div>
                                </div>
                                <!--second tab-->

                            </div>
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
      $('[data-toggle="tooltip"]').tooltip();
    })

    $( "#menu_bulletin" ).addClass("active");
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b74ed39045eb12d"></script>

</body>

</html>
