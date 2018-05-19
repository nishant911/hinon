
<!DOCTYPE html>
<html>
<head>
	<title>Hindon Consulting Contact us</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
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
	<!-- header -->
<?php include('header.php'); ?>
	<!-- banner -->
	<?php
		if( !empty( $_REQUEST['Message'] ) )
		{
			$msg = $_REQUEST['Message'];
    echo '<script> alert("Message has been Successfully Send"); </script>';
		}
	?>
	<?php
		if( !empty( $_REQUEST['Messagea'] ) )
		{
			$msg = $_REQUEST['Messagea'];
    
    echo '<script> alert("Message not Send Please Send Again"); </script>';
		}
	?>
	<!--//banner -->
		<!-- /inner_content -->
	<div class="banner-bottom">
		<div class="container">
			<div class="inner_sec_info_agileits_w3">
              <h2 class="heading-agileinfo">Contact Us</h2>
				<div class="contact-form" style="display:inline-block;">

					     <form   name="forms" enctype="multipart/form-data"  method="post" action="mail_action.php">
							<div class="left_form">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="name" type="text" class="textbox" required=""></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="email" type="text" class="textbox" required=""></span>
						    </div>
						    <div>
						     	<span><label>Mobile Number</label></span>
						    	<span><input name="mobile" type="text" class="textbox" required=""></span>
						    </div>
					   		</div>
					    	<div class="right_form">
							<div>					    	
								<span><label>Message</label></span>
								<span><textarea name="message" required=""> </textarea></span>
							</div>
							<div>
								<span><input type="submit" name="submit" value="Submit" class="myButton"></span>
							</div>
					    	</div>
					    	<div class="clearfix"></div>
						</form>						
				</div>
				<?php
			   			$con = OpenCon();				 
			            $query = "select * from contactus";
			            $result = mysqli_query($con, $query);
						mysqli_close($con);
			           	$row = mysqli_fetch_array($result);			           
			    ?>			     
				<div class="col-md-4 footer_grid" style="margin: 70px 0px 0px 42px;">
				<h3>Head Office</h3>
				<ul class="address" >
					<li style="color: #000000;"><i class="fa fa-map-marker" style="color:#000000;  border: none; font-size: 25px; " aria-hidden="true"></i>D-67, 4th Floor, Sector 2, Noida , Gautam Budh Nagar , UP , India 201301</li>
					<li style="color: #000000;"><i class="fa fa-envelope" style="color:#000000; border: none; font-size: 25px;" aria-hidden="true"></i>sales@hindon.in, sandeep@hindon.in</li>
					<li style="color: #000000;"><i class="fa fa-phone" style="color:#000000; border: none; font-size: 25px;" aria-hidden="true"></i>+91 9911323145</li>
				</ul>
				</div>	
				<div class="col-md-4 footer_grid" style="margin: -100px 0px 0px 42px;">
				<h3>Registered Office</h3>
				<ul class="address" >
					<li style="color: #000000;"><i class="fa fa-map-marker" style="color:#000000;  border: none; font-size: 25px; " aria-hidden="true"></i><?php echo $row['address']; ?></li>
					<li style="color: #000000;"><i class="fa fa-envelope" style="color:#000000; border: none; font-size: 25px;" aria-hidden="true"></i><?php echo $row['email']; ?></li>
					<li style="color: #000000;"><i class="fa fa-phone" style="color:#000000; border: none; font-size: 25px;" aria-hidden="true"></i><?php echo $row['phone_number']; ?></li>
				</ul>
			</div>
						  				  
			</div>		
		</div>
	</div>
		<!-- /map -->
			<div class="map_w3layouts_agile">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3503.547932310787!2d77.31496231517156!3d28.58333469305657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sD-67%2C+4th+Floor%2CSector-+2+Noida+201301+India!5e0!3m2!1sen!2sin!4v1520950315819" 
				style="border:0" allowfullscreen></iframe>

			</div>
		<!-- //map -->
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