<!DOCTYPE html>
<?php include "include/db_config.php";
session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: login.php');
    exit();
}
$id= $_SESSION['id'];
?>
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
    <title>AAMEYS Portal Admin Dashboard</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.18/css/jquery.dataTables.css"/>


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
                        <?php include "include/breadcrum.php"; ?>
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
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                    <h4>Manage <b>Business</b></h4>
                  </div>
                  <div class="col-sm-6">
                    <?php echo     $_SESSION['userType'] ; ?>
                  <a href="addbusiness.php" class="btn btn-success"><i class="material-icons"></i> <span>Add New Business</span></a>


                  </div>
                        </div>
                    </div>
                    <table id="example" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Business Name</th>
                                <th>Business Type</th>
                                <th>Contact Person</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if($_SESSION['userType']==0)
                            {
                              $query = "SELECT busId, busName, busType, busContactPerson, busContact FROM business";
                              $result = mysqli_query($conn,$query);
                            }
                        if($_SESSION['userType']==1)
                            {
                              $query = "SELECT busId , busName , busType , busContactPerson , busContact, UId  FROM business WHERE UId=$id ";
                              $result = mysqli_query($conn,$query);
                            }



                          while($row = mysqli_fetch_assoc($result))
                          {
                        ?>
                            <tr>
                                <td><?php echo $row['busId'];?></td>
                                <td><?php echo $row['busName'];?></td>
                                <td><?php echo $row['busType'];?></td>
                                <td><?php echo $row['busContactPerson'];?></td>
                                <td><?php echo $row['busContact'];?></td>
                                <td>
                                  <a href="viewbusiness.php?id=<?php echo $row['busId'];?>" class="view"  data-toggle="tooltip" rel="tooltip" data-placement="top" title="View Business">
                                      <i class="material-icons"></i>
                                  </a>
                                  <a  href="editbusiness.php?id=<?php echo $row['busId'];?>" class="edit" data-toggle="tooltip" data-placement="top" title="Edit Business">
                                    <i class="material-icons"></i>
                                  </a>
                                  <a  href="deletebusiness.php?id=<?php echo $row['busId'];?>" class="delete" data-toggle="tooltip" data-placement="top" title="Delete Business">
                                    <i class="material-icons" ></i>
                                  </a>

                                  <!-- Delete Modal HTML -->
                                  <!-- Modal -->

                                </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                    </table>


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
    <script type="text/javascript" src="DataTables-1.10.18/js/jquery.dataTables.js"></script>

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
      $('[data-toggle="tooltip"]').tooltip()
    });
      $('#example').DataTable();
    </script>
</body>
</html>
