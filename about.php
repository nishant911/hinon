
<!DOCTYPE html>
<html>
<head>
<title>Hindon Consulting About us</title>
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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"
	media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/appointment_style.css" rel="stylesheet" type="text/css"
	media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //for bootstrap working -->
<link
	href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700"
	rel="stylesheet">
</head>
<body>
	<?php include('header.php'); ?>
	<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">ABOUT US</h3>
	<?php
	    $con = OpenCon();
	    $query = "select * from aboutus";
	    $result = mysqli_query($con, $query);
		mysqli_close($con);
	    $row = mysqli_fetch_array($result);
    ?>
			<div class="col-md-6 about-w3right">
				<img src="images/g6.jpg" class="img-responsive" alt="" />
			</div>
			<div class="col-md-6 about-w3left">
				<div class="panel-group" id="accordion" role="tablist"
					aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h5 class="panel-title asd">
								<a class="pa_italic collapsed" role="button"
									data-toggle="collapse" data-parent="#accordion"
									href="#collapseOne" aria-expanded="false"
									aria-controls="collapseOne"> <span
									class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
									class="glyphicon glyphicon-minus" aria-hidden="true"></i><?php echo $row['heading1']; ?>
							</a>
							</h5>
						</div>
						<div id="collapseOne" class="panel-collapse collapse"
							role="tabpanel" aria-labelledby="headingOne"
							aria-expanded="false" style="height: 0px;">
							<div class="panel-body panel_text">
								<?php echo $row['content1']; ?>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h5 class="panel-title asd">
								<a class="pa_italic collapsed" role="button"
									data-toggle="collapse" data-parent="#accordion"
									href="#collapseTwo" aria-expanded="false"
									aria-controls="collapseTwo"> <span
									class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
									class="glyphicon glyphicon-minus" aria-hidden="true"></i><?php echo $row['heading2']; ?>
							</a>
							</h5>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse"
							role="tabpanel" aria-labelledby="headingTwo"
							aria-expanded="false" style="height: 0px;">
							<div class="panel-body panel_text">
								<?php echo $row['content2']; ?>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h5 class="panel-title asd">
								<a class="pa_italic collapsed" role="button"
									data-toggle="collapse" data-parent="#accordion"
									href="#collapseThree" aria-expanded="false"
									aria-controls="collapseThree"> <span
									class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
									class="glyphicon glyphicon-minus" aria-hidden="true"></i><?php echo $row['heading3']; ?>
							</a>
							</h5>
						</div>
						<div id="collapseThree" class="panel-collapse collapse"
							role="tabpanel" aria-labelledby="headingThree"
							aria-expanded="false" style="height: 0px;">
							<div class="panel-body panel_text">
								<?php echo $row['content3']; ?>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseFour"
									aria-expanded="true" aria-controls="collapseFour"> <span
									class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
									class="glyphicon glyphicon-minus" aria-hidden="true"></i><?php echo $row['heading4']; ?>
							</a>
							</h5>
						</div>
						<div id="collapseFour" class="panel-collapse collapse in"
							role="tabpanel" aria-labelledby="headingFour"
							aria-expanded="true">
							<div class="panel-body panel_text">
								<?php echo $row['content4']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //about -->
	<!-- emergency_cases -->
	<div class="emergency_cases_w3ls">
		<div class="emergency_cases_bt">
			<div class="container">
				<div class="emergency_cases_top">
					<div class="col-md-6 emergency_cases_w3ls_left">
						<h4>Opening Hours</h4>
						<h6>
							Monday - Friday&nbsp;<span class="eme">8.00 - 18.00</span>
						</h6>
						<h6>
							Monday - Saturday&nbsp;<span class="eme">9.00 - 17.00</span>
						</h6>
						<h6>
							Monday - Sunday&nbsp;<span class="eme">9.00 - 15.00</span>
						</h6>
					</div>
					<div class="col-md-6 emergency_cases_w3ls_right">
						<h4>Emergency Cases</h4>
						<h5>
							<i class="fa fa-phone" aria-hidden="true"></i>1230456789
						</h5>
						<p>Your treatment plan is designed for steady progress, with every
							phase promptly implemented.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- //emergency_cases -->
	<!-- team -->
	<div class="team">
		<div class="container">
			<h3 class="heading-agileinfo">
				TEAM
			</h3>
			<div class="teamgrids">

	<?php
			$con = OpenCon();
			$query = "select * from team";
			$result = mysqli_query($con, $query);
			mysqli_close($con);
			while ($row = mysqli_fetch_array($result)) {
    
    ?>
			<div class="col-md-3 teamgrid1">
					<img src="admin/websitecontent/<?php echo $row['image']; ?>"
						class="img-responsive" alt="" />
					<div class="teaminfo">
						<h3><?php echo $row['name']; ?></h3>
						<!--	<div class="team-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				-->
						<p>
							<i class="fa fa-dot-circle-o" aria-hidden="true"></i><?php echo $row['designation']; ?></p>
						<p>
							<i class="fa fa-phone" aria-hidden="true"></i><?php echo $row['phone_number']; ?></p>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i><a href=""> <?php echo $row['email']; ?></a>
						</p>
					</div>
				</div>
			<?php } ?>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //team -->
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