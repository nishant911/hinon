<?php
session_start();

if (! isset($_SESSION['username'])) {
    
    header("Location:../login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin</title>
<meta
	content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'
	name='viewport'>
<!-- Bootstrap 3.3.2 -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"
	type="text/css" />
<!-- FontAwesome 4.3.0 -->
<link
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<!-- Ionicons 2.0.0 -->
<link
	href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css"
	rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
<link href="dist/css/skins/_all-skins.min.css" rel="stylesheet"
	type="text/css" />
<!-- iCheck -->
<link href="plugins/iCheck/flat/blue.css" rel="stylesheet"
	type="text/css" />
<!-- Morris chart -->
<link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css"
	rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="plugins/datepicker/datepicker3.css" rel="stylesheet"
	type="text/css" />
<!-- Daterange picker -->
<link href="plugins/daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"
	rel="stylesheet" type="text/css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
	<div class="wrapper">
      
      
      <?php include("header.php"); ?>

      <!-- Right side column. Contains the navbar and content of the page -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>Home Page Content</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Dashboard</a></li>
					<li class="active">Home Page Content</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header"></div>
							<!-- /.box-header -->
							<!-- form start -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data" action="admin_slider_action.php">
								<div class="box-body">
									<div class="form-group">
										<label>Slider heading 1</label> <input type="text"
											name="slider_heading1" class="form-control"
											placeholder="Enter Slider Heading 1..." />
									</div>
									<div class="form-group">
										<label>Slider heading 2</label> <input type="text"
											name="slider_heading2" class="form-control"
											placeholder="Enter Slider Heading 2..." />
									</div>
									<div class="form-group">
										<label>Slider Content</label> <input type="text"
											name="slider_content" class="form-control"
											placeholder="Enter Slider Content..." />
									</div>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.box -->


					</div>
					<!--/.col (left) -->
					<div class="col-xs-12">


						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Slider Content</h3>
							</div>
							<!-- /.box-header -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data" action="admin_slider_delete.php">
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Serial No.</th>
												<th>Slider Heading 1</th>
												<th>Slider Heading 2</th>
												<th>Slider Content</th>
												<th>Select</th>
											</tr>
										</thead>
										<tbody>

                     <?php
                    $con = OpenCon();
                    $query = "select * from slider_content";
                    $result = mysqli_query($con, $query);
                    mysqli_close($con);
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $i ++;
                        ?>
           <tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row['slider_heading1']; ?></td>
												<td><?php echo $row['slider_heading2']; ?></td>
												<td><?php echo $row['slider_content']; ?></td>
												<td><input type="checkbox" name="checkbox[]"
													value="<?php echo $row['id']; ?>"></td>
											</tr>
           
            <?php } ?>
                    </tbody>

									</table>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="delete" class="btn btn-primary">Delete</button>
								</div>
							</form>
						</div>
						<!-- /.box -->
					</div>


				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
			<section class="content-header">
				<h1>Welcome Content</h1>

			</section>
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header"></div>
							<!-- /.box-header -->
							<!-- form start -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data" action="admin_welcome_action.php">
								<div class="box-body">
									<div class="form-group">
										<label>Welcome heading</label> <input type="text"
											name="welcome_heading" class="form-control"
											placeholder="Enter Welcome Heading..." />
									</div>
									<div class="form-group">
										<label>Welcome Content 1</label> <input type="text"
											name="welcome_content1" class="form-control"
											placeholder="Enter Welcome Content..." />
									</div>
									<div class="form-group">
										<label>Welcome Content 2</label> <input type="text"
											name="welcome_content2" class="form-control"
											placeholder="Enter Welcome Content..." />
									</div>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.box -->


					</div>
					<!--/.col (left) -->
					<div class="col-xs-12">


						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Slider Content</h3>
							</div>
							<!-- /.box-header -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data" action="admin_welcome_delete.php">
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Serial No.</th>
												<th>Welcome Heading</th>
												<th>Welcome Content 1</th>
												<th>Welcome Content 2</th>
												<th>Select</th>
											</tr>
										</thead>
										<tbody>

                     <?php
                    $con = OpenCon();
                    $query = "select * from welcome_content";
                    $result = mysqli_query($con, $query);
                    mysqli_close($con);
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $i ++;
                        ?>
           <tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row['welcome_heading']; ?></td>
												<td><?php echo $row['welcome_content1']; ?></td>
												<td><?php echo $row['welcome_content2']; ?></td>
												<td><input type="checkbox" name="checkbox[]"
													value="<?php echo $row['id']; ?>"></td>
											</tr>
           
            <?php } ?>
                    </tbody>

									</table>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="delete" class="btn btn-primary">Delete</button>
								</div>
							</form>
						</div>
						<!-- /.box -->
					</div>


				</div>
				<!-- /.row -->
			</section>
			</section>
			<!-- /.content -->
			<section class="content-header">
				<h1>Our Vission</h1>

			</section>
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header"></div>
							<!-- /.box-header -->
							<!-- form start -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data"
								action="admin_our_vission_action.php">
								<div class="box-body">
									<div class="form-group">
										<label>Our Vission Heading</label> <input type="text"
											name="our_vission_heading" class="form-control"
											placeholder="Enter Our Vission Heading..." />
									</div>
									<div class="form-group">
										<label>Our Vission Content</label> <input type="text"
											name="our_vission_content" class="form-control"
											placeholder="Enter Our Vission Content..." />
									</div>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.box -->


					</div>
					<!--/.col (left) -->
					<div class="col-xs-12">


						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Our Vission</h3>
							</div>
							<!-- /.box-header -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data"
								action="admin_our_vission_delete.php">
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Serial No.</th>
												<th>Our Vission Heading</th>
												<th>Welcome Content</th>
												<th>Select</th>
											</tr>
										</thead>
										<tbody>

                     <?php
                    $con = OpenCon();
                    $query_vission = "select * from our_vission";
                    $result_vission = mysqli_query($con, $query_vission);
                    mysqli_close($con);
                    $i = 0;
                    while ($row_vission = mysqli_fetch_array($result_vission)) {
                        $i ++;
                        ?>
           <tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row_vission['our_vission_heading']; ?></td>
												<td><?php echo $row_vission['our_vission_content']; ?></td>
												<td><input type="checkbox" name="checkbox[]"
													value="<?php echo $row_vission['id']; ?>"></td>
											</tr>
           
            <?php } ?>
                    </tbody>

									</table>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="delete" class="btn btn-primary">Delete</button>
								</div>
							</form>
						</div>
						<!-- /.box -->
					</div>


				</div>
				<!-- /.row -->
			</section>
			<section class="content-header">
				<h1>Our Mission</h1>

			</section>
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header"></div>
							<!-- /.box-header -->
							<!-- form start -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data"
								action="admin_our_mission_action.php">
								<div class="box-body">
									<div class="form-group">
										<label>Our Mission Heading</label> <input type="text"
											name="our_mission_heading" class="form-control"
											placeholder="Enter Our mission Heading..." />
									</div>
									<div class="form-group">
										<label>Our Mission Content</label> <input type="text"
											name="our_mission_content" class="form-control"
											placeholder="Enter Our mission Content..." />
									</div>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.box -->


					</div>
					<!--/.col (left) -->
					<div class="col-xs-12">


						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Our Mission</h3>
							</div>
							<!-- /.box-header -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data"
								action="admin_our_mission_delete.php">
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Serial No.</th>
												<th>Our Mission Heading</th>
												<th>Welcome Content</th>
												<th>Select</th>
											</tr>
										</thead>
										<tbody>

                     <?php
                    $con = OpenCon();
                    $query_mission = "select * from our_mission";
                    $result_mission = mysqli_query($con, $query_mission);
                    mysqli_close($con);
                    $i = 0;
                    while ($row_mission = mysqli_fetch_array($result_mission)) {
                        $i ++;
                        ?>
           <tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row_mission['our_mission_heading']; ?></td>
												<td><?php echo $row_mission['our_mission_content']; ?></td>
												<td><input type="checkbox" name="checkbox[]"
													value="<?php echo $row_mission['id']; ?>"></td>
											</tr>
           
            <?php } ?>
                    </tbody>

									</table>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="delete" class="btn btn-primary">Delete</button>
								</div>
							</form>
						</div>
						<!-- /.box -->
					</div>


				</div>
				<!-- /.row -->
			</section>
			<section class="content-header">
				<h1>Our Services</h1>

			</section>
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header"></div>
							<!-- /.box-header -->
							<!-- form start -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data"
								action="admin_our_services_action.php">
								<div class="box-body">
									<div class="form-group">
										<label>Our Services Main Heading</label> <input type="text"
											name="our_services_main_heading" class="form-control"
											placeholder="Enter Our Services Main Heading..." />
									</div>
									<div class="form-group">
										<label>Our Services Heading</label> <input type="text"
											name="our_services_heading" class="form-control"
											placeholder="Enter Our Services Heading..." />
									</div>
									<div class="form-group">
										<label>Our Services Content</label> <input type="text"
											name="our_services_content" class="form-control"
											placeholder="Enter Our Services Content..." />
									</div>
									<div class="form-group">
										<label>Upload Image</label> <input type="file"
											name="upload_image" class="form-control" placeholder="" />
									</div>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.box -->


					</div>
					<!--/.col (left) -->
					<div class="col-xs-12">


						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Our Services</h3>
							</div>
							<!-- /.box-header -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data"
								action="admin_our_services_delete.php">
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Serial No.</th>
												<th>Our Services Main Heading</th>
												<th>Our Services Main Heading</th>
												<th>Our Services Content</th>
												<th>Image</th>
												<th>Select</th>
											</tr>
										</thead>
										<tbody>

                     <?php
                    $con = OpenCon();
                    $query_services = "select * from our_services";
                    $result_services = mysqli_query($con, $query_services);
                    mysqli_close($con);
                    $i = 0;
                    while ($row_services = mysqli_fetch_array($result_services)) {
                        $i ++;
                        ?>
           <tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row_services['our_services_main_heading']; ?></td>
												<td><?php echo $row_services['our_services_heading']; ?></td>
												<td><?php echo $row_services['our_services_content']; ?></td>
												<td><a
													href="websitecontent/<?php echo $row_services['upload_image']; ?>" /> <?php echo $row_services['upload_image']; ?></td>
												<td><input type="checkbox" name="checkbox[]"
													value="<?php echo $row_services['id']; ?>"></td>
											</tr>
           
            <?php } ?>
                    </tbody>

									</table>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="delete" class="btn btn-primary">Delete</button>
								</div>
							</form>
						</div>
						<!-- /.box -->
					</div>


				</div>
				<!-- /.row -->
			</section>
			<section class="content-header">
				<h1>Testimonial</h1>

			</section>
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header"></div>
							<!-- /.box-header -->
							<!-- form start -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data"
								action="admin_testimonial_action.php">
								<div class="box-body">
									<div class="form-group">
										<label>Testimonial Content</label> <input type="text"
											name="testimonial_content" class="form-control"
											placeholder="Enter Testimonial Content..." />
									</div>
									<div class="form-group">
										<label>Name</label> <input type="text" name="name"
											class="form-control" placeholder="Enter Name..." />
									</div>
									<div class="form-group">
										<label>Upload Image</label> <input type="file"
											name="upload_image" class="form-control" placeholder="" />
									</div>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.box -->


					</div>
					<!--/.col (left) -->
					<div class="col-xs-12">


						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Testimonial</h3>
							</div>
							<!-- /.box-header -->
							<form role="form" name="forms" method="post"
								enctype="multipart/form-data"
								action="admin_testimonial_delete.php">
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Serial No.</th>
												<th>Our Services Main Heading</th>
												<th>Our Services Content</th>
												<th>Image</th>
												<th>Select</th>
											</tr>
										</thead>
										<tbody>

                     <?php
                    $con = OpenCon();
                    $query_testimonial = "select * from testimonial";
                    $result_testimonial = mysqli_query($con, $query_testimonial);
                    mysqli_close($con);
                    $i = 0;
                    while ($row_testimonial = mysqli_fetch_array($result_testimonial)) {
                        $i ++;
                        ?>
           <tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $row_testimonial['testimonial_content']; ?></td>
												<td><?php echo $row_testimonial['name']; ?></td>
												<td><a
													href="websitecontent/<?php echo $row_testimonial['upload_image']; ?>" /> <?php echo $row_testimonial['upload_image']; ?></td>
												<td><input type="checkbox" name="checkbox[]"
													value="<?php echo $row_testimonial['id']; ?>"></td>
											</tr>
           
            <?php } ?>
                    </tbody>

									</table>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="delete" class="btn btn-primary">Delete</button>
								</div>
							</form>
						</div>
						<!-- /.box -->
					</div>


				</div>
				<!-- /.row -->
			</section>
		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- ./wrapper -->

	<!-- jQuery 2.1.3 -->
	<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<!-- jQuery UI 1.11.2 -->
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js"
		type="text/javascript"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- Morris.js charts -->
	<script
		src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="plugins/morris/morris.min.js" type="text/javascript"></script>
	<!-- Sparkline -->
	<script src="plugins/sparkline/jquery.sparkline.min.js"
		type="text/javascript"></script>
	<!-- jvectormap -->
	<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"
		type="text/javascript"></script>
	<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"
		type="text/javascript"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
	<!-- daterangepicker -->
	<script src="plugins/daterangepicker/daterangepicker.js"
		type="text/javascript"></script>
	<!-- datepicker -->
	<script src="plugins/datepicker/bootstrap-datepicker.js"
		type="text/javascript"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script
		src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"
		type="text/javascript"></script>
	<!-- iCheck -->
	<script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
	<!-- Slimscroll -->
	<script src="plugins/slimScroll/jquery.slimscroll.min.js"
		type="text/javascript"></script>
	<!-- FastClick -->
	<script src='plugins/fastclick/fastclick.min.js'></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js" type="text/javascript"></script>

	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js" type="text/javascript"></script>
</body>
</html>