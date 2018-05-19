
<?php
include 'dbconnection.php';
$con = OpenCon();

$query = "select * from admin_login where username='$_SESSION[username]'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
mysqli_close($con);
?>
<header class="main-header">
	<!-- Logo -->
	<a href="admin_home_page.php" class="logo"><b>HINDON</b></a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas"
			role="button"> <span class="sr-only">Toggle navigation</span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->

				
				<!-- Tasks: style can be found in dropdown.less -->

				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu"><a href="#"
					class="dropdown-toggle" data-toggle="dropdown">               
                  <img src="../images/m1.png" class="user-image">   
                  <span class="hidden-xs"> <?php echo $row['username']; ?> </span>
				</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
                  <img src="../images/m1.png" class="img-circle">
                    <p>
					<?php echo $row['username']; ?>
                    </p>
						</li>
						<!-- Menu Body -->

						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul></li>
			</ul>
		</div>
	</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
                  <img src="../images/m1.png" class="img-circle"> 
            </div>
			<div class="pull-left info">
				<p><?php echo $row['username']; ?> </p>
			</div>
		</div>
		<!-- search form -->

		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="treeview"><a href="admin_home_page.php"> <i class="fa fa-folder"></i> 
					<span>Home Page</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li>
			<li class="treeview"><a href="admin_about_us.php"> <i class="fa fa-folder"></i> 
					<span>About Us</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li>
			<li class="treeview"><a href="admin_services.php"> <i class="fa fa-folder"></i> 
					<span>Services</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li>
			<!-- <li class="treeview"><a href="admin_products.php"> <i class="fa fa-folder"></i> 
					<span>Products</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li> -->
			<li class="treeview"><a href="admin_clients.php"> <i class="fa fa-folder"></i> 
					<span>Clients</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li>
			<li class="treeview"><a href="admin_team.php"> <i class="fa fa-folder"></i> 
					<span>Team</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li>
			<li class="treeview"><a href="admin_photo_gallery.php"> <i class="fa fa-folder"></i> 
					<span>Photo Gallery</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li>
			<li class="treeview"><a href="admin_video_gallery.php"> <i class="fa fa-folder"></i> 
					<span>Video Gallery</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li>
			
			<li class="treeview"><a href="admin_contactus.php"> <i class="fa fa-folder"></i> 
					<span>Contact Us</span> <i class="fa-fa-angle-left pull-right"></i></a>
			</li>
			
			<li class="treeview"><a href="../logout.php"> <i class="fa fa-hand-o-up"></i><span>Logout</span></a>
			</li>


		</ul>
	</section>
	<!-- /.sidebar -->
</aside>



