	<div class="header" id="home">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<?php
			include 'dbconnection.php';	
   			$con = OpenCon();
            $query = "select * from contactus";
            $result = mysqli_query($con, $query);
           	$row = mysqli_fetch_array($result);
           mysqli_close($con);
           ?>
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row['address']; ?></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $row['phone_number']; ?></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href=""><?php echo $row['email']; ?></a></li>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
					<!--<li><a href="form/register.php">Registration</a> </li>-->
					<li><a href="login.php">Login</a> </li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.php">
							<img src="images/logo.png" class="logo" alt="" />
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="service.php">Services</a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
									 <ul class="dropdown-menu">
										<li><a href="service.php#consulting">Consulting</a></li>
					 					<li class="divider"></li>
										<li><a href="service.php#e-commerce">E-Commerce</a></li>
										<li class="divider"></li>
										<li><a href="service.php#gis">GIS Services</a></li>
										<li class="divider"></li>
										<li><a href="service.php#data">Data Collection</a></li>
										<li class="divider"></li>
										 <li><a href="service.php#publication">Publication& Training</a></li>
										<li class="divider"></li>
										<li><a href="service.php#application">Application Development </a></li>
										<li class="divider"></li>
										
									</ul> 
								</li> -->
								<li><a href="products.php">Our Products</a></li>
								<li><a href="clients.php">Clients</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="gallery.php">Photo Gallery</a></li>
										<li class="divider"></li>
										<li><a href="videogallery.php">Video Gallery</a></li>
										<li class="divider"></li>
										
									</ul>
								</li>
								<li><a href="mail.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>