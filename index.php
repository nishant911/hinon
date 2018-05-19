
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<title>Hindon Consulting Home</title>
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<?php include('header.php'); ?>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>

			
			<div class="carousel-inner" role="listbox">
			  <?php
						 $con = OpenCon();
                         $query = "select * from slider_content";
                         $result = mysqli_query($con,$query);
						 mysqli_close($con);
                         $row = mysqli_fetch_array($result);           
                   ?>
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						
						<h3><?php echo $row['slider_heading1']; ?></h3>
						<p><?php echo $row['slider_heading2']; ?></p>
						
						<h6><?php echo $row['slider_content']; ?></h6>
					</div>
				</div>
			</div>
			<?php while($row = mysqli_fetch_array($result)){  ?>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						
						<h3><?php echo $row['slider_heading1']; ?></h3>
						<p><?php echo $row['slider_heading2']; ?></p>
						<h6><?php echo $row['slider_content']; ?></h6>
							
					</div>
				</div>
			</div>
			<?php } ?>
		

		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!-- about -->
	<div class="agile-about w3ls-section">
	<!-- about-bottom -->
	<div class="agileits-about-btm">
	<h3 class="heading-agileinfo">WELCOME<span></span></h3>
		<div class="container">
			<?php
						 $con = OpenCon();
                         $query_welcome = "select * from welcome_content";
                         $result_welcome = mysqli_query($con,$query_welcome);
						 mysqli_close($con);
                                    
                   ?>
			<div class="w3-flex">
			<div class="grid_3 grid_5 agile">
				 <?php while($row_welcome = mysqli_fetch_array($result_welcome)){  ?>
				<h3><?php echo $row_welcome['welcome_heading']; ?></h3>
				<div class="well">
						<?php echo $row_welcome['welcome_content1']; ?>
				</div>
				<div class="well">
						<?php echo $row_welcome['welcome_content2']; ?>
				</div>
				<?php } ?>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about-bottom -->
</div>
<!-- emergency -->
<div class="emergency_cases_w3ls">
<div class="emergency_cases_bt">
	<div class="container">
		<h3 style="font-weight: bold;color: #ff9900; margin-bottom: 20px; font-size: 40px;">Who We Are</h3>
	<div class="emergency_cases_top">
		<?php
						 $con = OpenCon();
                         $query_our_vission = "select * from our_vission";
                         $result_our_vission = mysqli_query($con,$query_our_vission);
						 mysqli_close($con);
                         $row_our_vission = mysqli_fetch_array($result_our_vission);
                                    
                   ?>
		<div class="col-md-6 emergency_cases_w3ls_left">

			<h4><?php echo $row_our_vission['our_vission_heading'] ?></h4>
			<p> <?php echo $row_our_vission['our_vission_content'] ?> </p>
		<!--	<h6>Monday - Friday&nbsp;<span class="eme">8.00 - 18.00</span></h6>
			<h6>Monday - Saturday&nbsp;<span class="eme">9.00 - 17.00</span></h6>
			<h6>Monday - Sunday&nbsp;<span class="eme">9.00 - 15.00</span></h6>	-->
		</div>
		<div class="col-md-6 emergency_cases_w3ls_right">
			<?php
						  $con = OpenCon();
                         $query_our_mission = "select * from our_mission";
                         $result_our_mission = mysqli_query($con,$query_our_mission);
						 mysqli_close($con);
                         $row_our_mission = mysqli_fetch_array($result_our_mission);
                                    
                   ?>
			<h4><?php echo $row_our_mission['our_mission_heading'] ?></h4>
		<!--	<h5><i class="fa fa-phone" aria-hidden="true"></i>1230456789</h5>	-->
			<p><?php echo $row_our_mission['our_mission_content'] ?></p>
		</div>
		
		<div class="clearfix"></div>
		</div>
	</div>
	</div>
</div>
<!-- //emergency -->
<!-- services -->
<!--<div class="services">
<div class="container">
		<h3 class="heading-agileinfo">OUR PRODUCTS<span>Congratulations for having taken a right decision in your life. You are joining the Company which is going to create HISTORY IN THE NETWORK MARKETING BUSINESS.</span></h3>
	
		<div class="services-top-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-heartbeat" aria-hidden="true"></i>
					<h4>PRODUCT</h4>
					<p>Product Details LENOVO APU DUAL CORE E2 7TH GEN - (4 GB/1 TB HDD/DOS) IP 320E LAPTOP (15.6 INCH, BLACK, 2.2 KG) </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-user-md" aria-hidden="true"></i>
					<h4>PRODUCT</h4>
					<p>Product Details LENOVO APU DUAL CORE E2 7TH GEN - (4 GB/1 TB HDD/DOS) IP 320E LAPTOP (15.6 INCH, BLACK, 2.2 KG)  </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
					<h4>PRODUCT</h4>
					<p>Product Details LENOVO APU DUAL CORE E2 7TH GEN - (4 GB/1 TB HDD/DOS) IP 320E LAPTOP (15.6 INCH, BLACK, 2.2 KG) </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-medkit" aria-hidden="true"></i>
					<h4>PRODUCT</h4>
					<p>Product Details LENOVO APU DUAL CORE E2 7TH GEN - (4 GB/1 TB HDD/DOS) IP 320E LAPTOP (15.6 INCH, BLACK, 2.2 KG) </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-hospital-o" aria-hidden="true"></i>
					<h4>PRODUCT</h4>
					<p>Product Details LENOVO APU DUAL CORE E2 7TH GEN - (4 GB/1 TB HDD/DOS) IP 320E LAPTOP (15.6 INCH, BLACK, 2.2 KG) </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-ambulance" aria-hidden="true"></i>
					<h4>PRODUCT</h4>
					<p>Product Details LENOVO APU DUAL CORE E2 7TH GEN - (4 GB/1 TB HDD/DOS) IP 320E LAPTOP (15.6 INCH, BLACK, 2.2 KG)</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>-->
<!-- //services -->
<!-- Clients -->
	<div class="banner-bottom">
		<div class="container">
				<?php
						  $con = OpenCon();
                         $query_our_services = "select * from our_services";
                         $result_our_services = mysqli_query($con,$query_our_services);
						 mysqli_close($con);
                         $row_our_services = mysqli_fetch_array($result_our_services);
                                    
                   ?>
			<div class="tittle_head_w3layouts">
				<h3 class="heading-agileinfo">Our Services<span><?php echo $row_our_services['our_services_main_heading']; ?></span></h3>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<?php while($row_our_services = mysqli_fetch_array($result_our_services)) { ?>
				<div class="col-md-4 grid_info">
					<div class="icon_info">
						<img src="admin/websitecontent/<?php echo $row_our_services['upload_image']; ?>" alt=" " class="img-responsive">
						<h5><?php echo $row_our_services['our_services_heading']; ?></h5>
						<p><?php echo $row_our_services['our_services_content']; ?></p>
						
					</div>
				</div>
				
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//icons-->

<div class="tesimonials">
<div class="tesimonials_tp">
		<div class="container">
			<div class="tittle_head_w3layouts">
				<h3 class="heading-agileinfo te">What Clients Say<span class="te"></span></h3>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<div class="test_grid_sec">
					<div class="col-md-offset-2 col-md-10">
						<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators two">
								<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#quote-carousel" data-slide-to="1"></li>
								<li data-target="#quote-carousel" data-slide-to="2"></li>
							</ol>

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">

					<?php
						  $con = OpenCon();
                         $query_testimonial = "select * from testimonial";
                         $result_testimonial = mysqli_query($con,$query_testimonial);
						 mysqli_close($con);
                        
                                    
                   ?>
                   				<?php $row_testimonial = mysqli_fetch_array($result_testimonial); ?>
								<!-- Quote 1 -->
								<div class="item active">
									<blockquote>
										<div class="test_grid">
											
											<div class="col-sm-3 text-center test_img">
												<img src="admin/websitecontent/<?php echo $row_testimonial['upload_image']; ?>" alt=" " class="img-responsive" />

											</div>
											<div class="col-sm-9 test_img_info">
												<p><?php echo $row_testimonial['testimonial_content']; ?></p>
												<h6><?php echo $row_testimonial['name']; ?></h6>
											</div>
											
										</div>
									</blockquote>
								</div>
								
								<?php while($row_testimonial = mysqli_fetch_array($result_testimonial)) {  ?>
								<!-- Quote 1 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											
											<div class="col-sm-3 text-center test_img">
												<img src="admin/websitecontent/<?php echo $row_testimonial['upload_image']; ?>" alt=" " class="img-responsive" />

											</div>
											<div class="col-sm-9 test_img_info">
												<p><?php echo $row_testimonial['testimonial_content']; ?></p>
												<h6><?php echo $row_testimonial['name']; ?></h6>
											</div>
											
										</div>
									</blockquote>
								</div>
								<?php } ?>
								<!-- Quote 2 -->
								
								<!-- Quote 3 -->
								
							</div>

							<!-- Carousel Buttons Next/Prev -->
							<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
							<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Clients -->
<!--/icons-->

	<!-- footer -->
	<?php include('footer.php'); ?>
<!-- //bootstrap-modal-pop-up --> 

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>