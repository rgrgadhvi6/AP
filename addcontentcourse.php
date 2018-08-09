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
                    <h3 class="text-primary">Select Course</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="bulletin.php">Home</a></li>
                        <li class="breadcrumb-item active">Select Course</li>
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
                                      <form action="addcontent.php" class="form-valide" method="post">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-topName"> Please Select Course for the topic and content<span class="text-danger">*</span></label>


                                            <div class="col-lg-6">
                                                <select class="form-control" id="courId" name="courId">
                                                <option value=""  disabled selected>Please select</option>

                                                  <?php
                                                  $query2 = "SELECT * FROM course";
                                                  $result2 = mysqli_query($conn,$query2);
                                                    while($row2 = mysqli_fetch_assoc($result2))
                                                    {
                                                  ?>
                                                    <option value="<?php echo $row2['courId'];?>"><?php echo $row2['courName']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>




                                  </div>
                                          <div class="form-group row">
                                              <div class="col-lg-8 ml-auto">
                                                  <button type="submit" name="submit" class="btn btn-primary btn-flat ">Next</button>
                                              </div>

                                          </div>

                                          <div id="add">
                                          <?php

                                          if(isset($_POST['submit']))
                                          {

                                          $topName= $_POST['topName'];
                                          $courId= $_POST['courId'];

                                            $query = "INSERT INTO `topic`(`topName`, `courId`)
                                                      VALUES (?,?)";
                                            $stmt = mysqli_prepare($conn,$query);
                                            mysqli_stmt_bind_param($stmt,"si",$topName,$courId);
                                            mysqli_stmt_execute($stmt);
                                            if(($rows=mysqli_stmt_affected_rows($stmt))==1)
                                            {
                                                  ?><div class="alert alert-success">
                                                    <strong>Success! </strong> Topic Name is Added.
                                                  </div>
                                                            <script type='text/javascript'>
                                                              window.setTimeout(function(){
                                                                window.location = 'topic.php';

                                                              } , 2000);
                                                            </script>
                                                <?php
                                                            }
                                                            else
                                                            {
                                                                echo "Something went wrong, Topic not Added";
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
      $('[data-toggle="tooltip"]').tooltip();


    })
    </script>
</body>
</html>





































<!-- INSERT INTO `bulletin`(`bullTopic`, `bullDate`, `bullLocation`, `bullTime`, `bullOther`, `bullContent`, `bullReadMore`, `bullImage`) VALUES (
"Multicultural Arts Victoria AGM","2018-05-30","","","","Our Annual General Meeting was held on Monday 22nd May. We thank the Minister for Creative Industries Mr Martin Foley and Patron Hon John Cain and wife Nancye for attending along with over 80 of our members and supporters. MAV achievements are outlined in our Annual Report","https://www.google.com/url?q=http://app.streamsend.com/c/29002395/34833/EqbCxRF/kws9ugutlh?redirect_to%3Dhttps%253A%252F%252Fissuu.com%252Fmulticulturalarts%252Fdocs%252F2017_annual_report&source=gmail&ust=1527727970901000&usg=AFQjCNG25w7pdPVVBJ3Ltai1KZc6jHp3eQ","https://www.google.com.au/search?q=Multicultural+Arts+Victoria+AGM&rlz=1C1CHBF_en-GBAU756AU756&biw=1284&bih=632&tbm=isch&source=lnms&sa=X&ved=0ahUKEwj4vN-LnqzbAhUHu7wKHS4vD-EQ_AUIDCgD#imgrc=qdB--FEvLBmrHM:"); -->
