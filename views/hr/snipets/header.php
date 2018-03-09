

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper" style="background:#a8ce6c">
            <div class="logo">
                <a href="#" class="simple-text" style="color:#fff;">
                    <img src="<?php echo URL;?>public/images/badge.png" style="height:50px"> NPS - HR
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo URL;?>hr">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo URL;?>hr/applicants">
                        <i class="ti-user"></i>
                        <p>Applicants</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-files"></i>
                        <p>Completed Forms</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-check"></i>
                        <p>Verified</p>
                    </a>
                </li>
                
                <li>
                    <a href="icons.html">
                        <i class="ti-thumb-up"></i>
                        <p>Accepted</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-thumb-down"></i>
                        <p>Denied</p>
                    </a>
                </li>
                
                <li>
                    <a href="icons.html">
                        <i class="ti-zip"></i>
                        <p>Unverified</p>
                    </a>
                </li>
                
               
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo URL;?>hr">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                       
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL;?>hr/logout" class="btn btn-danger btn-sm">Logout
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>