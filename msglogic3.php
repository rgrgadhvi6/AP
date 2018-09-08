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
    <link href="css/messagestyle.css" rel="stylesheet">
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
                      <li class="breadcrumb-item"><a href="bulletin.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="business.php">Business</a></li>
                      <li class="breadcrumb-item active">View Business</li>
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
                                                                                <a href="tel:5555555555"><i class="fa fa-phone"></i></a>
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
                                          <div class="tab-pane p-20" id="messages8" role="tabpanel">


                                            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">



                                            <h3 class=" text-center">Messaging</h3>
                                            <div class="messaging">
                                                  <div class="inbox_msg">

                                                    <div class="mesgs">
                                                      <div class="msg_history">
                                                        <?php

                                                          $query4 = "SELECT * FROM message";
                                                          $result4 = mysqli_query($conn,$query4);

                                                          while($row4 = mysqli_fetch_assoc($result4))
                                                        {
                                                              $senderId= $row4['senId'];
                                                              $recId=$row4['recId'];
                                                              $int1=5;
                                                              $int2=4;
                                                              $query6 = "SELECT * FROM users WHERE id = $senderId";
                                                              $result6 = mysqli_query($conn,$query6);
                                                              $row6 = mysqli_fetch_assoc($result6);
                                                              $firstName = $row6['uFirstName'];
                                                              $lastName = $row6['uLastName'];
                                                              $displaytime= $row4['time'];
                                                              $D = strtotime($displaytime);
                                                                      ?>
                                                                      <?php if($row4=0 )
                                                                      {?>
                                                                        <div class="incoming_msg">
                                                                        <div class="incoming_msg_img"> </div>
                                                                        <div class="received_msg">
                                                                          <div class="received_withd_msg">
                                                                            <p><?php echo $row4['message'];?></p>
                                                                            <span class="time_date"> <span id="firstName"><?php echo $firstName; echo " | "; ?></span><?php  echo date("j M, Y  |  h:i A", $D);?></span>

                                                                            <span id="lastName"style="visibility: hidden"><?php echo $lastName?></span>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                      <?php
                                                                    }  else if(($senderId=$int2) && ($recId=$int1)){?>

                                                                        <div class="outgoing_msg">
                                                                        <div class="sent_msg">
                                                                          <p><?php echo $row4['message'];?></p>
                                                                          <span class="time_date">  <?php  echo date("j M, Y  |  h:i A", $D);?></span> </div>
                                                                      </div>
                                                                      <?php
                                                                      }?>
                                                          <?php

                                                        }
                                                        ?>



                                                      </div>
                                                      <div class="type_msg">
                                                        <div class="input_msg_write">
                                                          <div class="form-validation">
                                                              <form action="postmsg.php" class="form-valide" method="post">

                                                                    <div class="row">
                                                                          <textarea  id="message" name="message" class="col-md-11 col-xs-6 form-control"   placeholder="Type a message"></textarea>
                                                                          <div stype=" max-width: 5px;"><button class="btn btn-success" name="submitmsg" type="submit" ><i class="fa fa-paper-plane"></i> </button> </div>
                                                                          </div>

                                                          </div>
                                                              </form>





                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>




                                                </div>








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
      $('[data-toggle="tooltip"]').tooltip();
    })

    $( "#menu_business" ).addClass("active");

    </script>
    <script>
    $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('.incoming_msg_img').text(intials);
        });
      </script>
</body>
</html>
