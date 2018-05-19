
<!DOCTYPE html>
<html>

<head>
	<title>Hindon Consulting Gallery</title>
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
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<?php include('header.php'); ?>
	<!-- banner -->

	<!--//banner -->
	<!-- gallery -->
	<div class="gallery">

		<h2 class="heading-agileinfo">Our Gallery</h2>
		<div class="container">
			<div class="gallery-grids">

				 <?php
									$con = OpenCon();
									$query = "select * from photo_gallery";
									$result = mysqli_query($con,$query);
									mysqli_close($con);
									$count = mysqli_num_rows($result);
									
									
								
										while($row = mysqli_fetch_array($result))  {
								?>
						<div class="col-md-4 col-sm-4 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="admin/websitecontent/<?php echo $row['upload_image']; ?>" data-lightbox="example-set" >
									<img src="admin/websitecontent/<?php echo $row['upload_image']; ?>" alt="" />
									<figcaption>
										<p></p>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<?php } ?>
				
					<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!-- //gallery -->

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