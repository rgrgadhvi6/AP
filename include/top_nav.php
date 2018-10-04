<nav class="navbar top-navbar navbar-expand-md navbar-light">

    <!-- Logo -->
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">

            <!-- Logo icon -->
            <b><img src="images/logo.png" alt="homepage" class="dark-logo"></b>

            <!-- Logo text -->
            <span style="">AAMEYS <strong>Portal</strong></span>
        </a>
    </div>

    <!-- End Logo -->
    <div class="navbar-collapse">

        <!-- toggle and nav items -->
        <ul class="navbar-nav mr-auto mt-md-0">

            <!-- This is  -->
            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi-close mdi-menu mdi"></i></a> </li>
            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
        </ul>
        <?php
        if(isset($_SESSION['username']))
        {
        ?>
        <ul class="navbar-nav my-lg-0">
            <!-- Profile -->
            <li class="nav-item dropdown">
              
              <a class="btn btn-success btn-sm m-b m-l-6" href="logout.php"><i class="fa fa-sign-in-alt"></i>Logout</a>

            </li>
        </ul>
          <?php
        }
        if(!isset($_SESSION['username']))
        {
          ?>
          <ul class="navbar-nav my-lg-0">
              <!-- Profile -->
              <li class="nav-item dropdown">
                <a class="btn btn-success btn-sm m-b m-l-6" href="login.php"><i class="fa fa-sign-in-alt"></i>Login</a>

              </li>
          </ul>
          <?php
        }
        ?>



    </div>
</nav>
