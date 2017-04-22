
<div class="container-fluid">
<div class="row" style="background:#8CD1E6;"> 
<div class="col-lg-4">               
      <img src="../../images/logo.png" class="img-responsive" alt="LJ" width="300" height="236" > 
	  </div>
	  <div class="col-lg-4"></div>
	<div class="col-lg-4" ><h1 style="color:blue;">Faculty Leave <div style="color:red;">Management</div></h1>
	</div>
	</div>



<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
			<li>Hello, <?php echo $login_session; ?></li>
                
                
              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="../../include/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="../"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="../leave-reports"><i class="fa fa-bar-chart-o fa-fw"></i> Leave-Reports</a>
                            
                        </li>
                        <li>
                            <a href="../balance"><i class="fa fa-table fa-fw"></i> Balance</a>
                        </li>
                        <li>
                            <a href="../new-applications"><i class="fa fa-edit fa-fw"></i> New Applications</a>
                        </li>
						<li>
                            <a href="../approved"><i class="fa fa-edit fa-fw"></i> Approved Applications</a>
                        </li>
						<li>
                            <a href="../disapproved"><i class="fa fa-edit fa-fw"></i> Dispproved Applications</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Admin Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../add-admin">Add Admin</a>
                                </li>
                                <li>
                                    <a href="../delete-admin">Delete Admin</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Faculty Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../add-faculty">Add Faculty</a>
                                </li>
								<li>
                                    <a href="../add-faculty-data">Add Faculty Data</a>
                                </li>
                                <li>
                                    <a href="../delete-faculty">Delete Faculty</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../credits"><i class="fa fa-files-o fa-fw"></i> Credits<span class="fa arrow"></span></a>
                            
                        </li>
						<!--<li>
                            <a href="../leave-report/leave-report.php"><i class="fa fa-bar-chart-o fa-fw"></i> Leave-Reports</a>
                            
                        </li>-->
						<!--<li><a href="#">---Faculty Functions---</li>
						<li>
                            <a href="../../faculty/balance/balance.php"><i class="fa fa-table fa-fw"></i> Balance</a>
                        </li>
						<li>
                            <a href="../form/form.php"><i class="fa fa-edit fa-fw"></i> Leave Applications </a>
                        </li>
						<li>
                            <a href="../notifications/notifications.php"><i class="fa fa-bell fa-fw"></i> Notifications</a>
                        </li>-->
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>