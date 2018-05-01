
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <body ng-app="nps" class="hold-transition skin-green layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
  
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
          <span style="font-family:sans-serif;font-size:18px;">NPS Content Management System</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <li class="dropdown messages-menu" style="display:none">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 2 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo URL;?>views/images/alert.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                      Court Schedule

                      </h4>
                      <p>Four inmate have a court schedule this week</p>
                    </a>
                  </li>
                  <!-- end message -->


                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo URL;?>views/images/alert.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Awaiting Trial

                      </h4>
                      <p>305 inmates are still on awaiting trial</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>


        <a href="<?php echo URL;?>cms/logout/" class="btn btn-danger pull-right"><i class="fa fa-sign-out"></i> Logout</a>


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="display:none">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <span class="hidden-xs"><?php echo $details[0]['fname'].' '.$details[0]['sname'].' '.$details[0]['othernames'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="height:auto;padding-bottom:0;">


                <p>
                  <?php echo $details[0]['fname'].' '.$details[0]['sname'].' '.$details[0]['othernames'];?> - Web Developer
                  <small>Rank <?php echo $details[0]['presentRank'];?></small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo URL; ?>login/logout/" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>

 