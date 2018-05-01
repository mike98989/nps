

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="white">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper" style="background:#95C050" data-background-color="white | black">
            <div class="logo">
                <a href="#" class="simple-text" style="color:#fff;">
                    <img src="<?php echo URL;?>public/images/badge.png" style="height:50px"> NPS - HR
                </a>
            </div>

            <ul class="nav">
                <li <?php if($url[2]==''){echo "class='active'";}?>>
                    <a href="<?php echo URL;?>hr">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if($_SESSION['details'][0]['account_type']=='1'){?>
                <li <?php if($url[2]=='applicants'){echo "class='active'";}?>>
                    <a href="<?php echo URL;?>hr/applicants">
                        <i class="ti-user"></i>
                        <p>Applicants</p>
                    </a>
                </li> 

                <li <?php if($url[2]=='completed'){echo "class='active'";}?>>
                    <a href="<?php echo URL;?>hr/completed">
                        <i class="ti-files"></i>
                        <p>Completed Forms</p>
                    </a>
                </li>
                <?php }?>
                <?php if($_SESSION['details'][0]['account_type']=='2'){?>
                <li <?php if($url[2]=='eligible'){echo "class='active'";}?>>
                    <a href="<?php echo URL;?>hr/eligible">
                        <i class="ti-check"></i>
                        <p>Eligible</p>
                    </a>
                </li>
                <?php }?>
                <?php if($_SESSION['details'][0]['account_type']=='3'){?>
                <li <?php if($url[2]=='accepted'){echo "class='active'";}?>>
                    <a href="<?php echo URL;?>hr/accepted">
                        <i class="ti-thumb-up"></i>
                        <p>Processed Applicants</p>
                    </a>
                </li>
                <?php }?>
                <li <?php if($url[2]=='denied'){echo "class='active'";}?> style="display:none">
                    <a href="<?php echo URL;?>hr/denied">
                        <i class="ti-thumb-down"></i>
                        <p>Denied</p>
                    </a>
                </li>
                <?php if($_SESSION['details'][0]['account_type']=='1'){?>
                <li <?php if($url[2]=='unverified'){echo "class='active'";}?>>
                    <a href="<?php echo URL;?>hr/unverified">
                        <i class="ti-zip"></i>
                        <p>Unverified</p>
                    </a>
                </li>
                <?php }?>
                <?php if($_SESSION['details'][0]['account_type']=='3'){?>
                <li <?php if($url[2]=='cg_approved'){echo "class='active'";}?>>
                    <a href="<?php echo URL;?>hr/cg_approved">
                        <i class="ti-files"></i>
                        <p>CG's Approved List</p>
                    </a>
                </li>
                <?php }?>
                <li <?php if($url[2]=='sorting'){echo "class='active'";}?>>
                    <a href="<?php echo URL;?>hr/sorting">
                        <i class="ti-files"></i>
                        <p>Sorting</p>
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