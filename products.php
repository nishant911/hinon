
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
	<style type="text/css">	
.row1
	{
	    
	    margin-left:23%;
	}
.column {
	  float: left;
	  width: 35%;
	  margin-bottom: 16px;
	  padding: 0 8px;

	}

@media (max-width: 650px) {
  .column {
		    width: 95%;
		    display: block;
		  }
  .row1
	{
	    
	    margin-left:5%;
	}
.img
	{
	border: 2px solid #000000;	
	width:60%;
	}
	}

.card {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  
	}
.img
	{
	border: 2px solid #000000;	
	}
.container1 {
	  padding: 20px 16px;
	  height: 300px;
	  
	}
.text
	{
		text-align: justify;
		color: #ae275f;
	}
.container1::after, .row::after {
	  content: "";
	  clear: both;
	  display: table;
	}

.title {
	  color: #000000;
	}
.title1
	{
		color: #052d72;
		font-size: 25px;
	}
.button {
	  border: none;
	  outline: 0;
	  display: inline-block;
	  padding: 8px;
	  color: white;
	  background-color: #000;
	  text-align: center;
	  cursor: pointer;
	  width: 10%;
	}

.button:hover {
	  background-color: #555;
	}
.contentArea
	{
	  margin: 6% 5% 5% 8%;
	  text-align: justify;
	}
.heading
	{
	  color: #ff9900;
	  font-size: 20px;
	}
.subpoints
	{
		margin-left: 3%;
	}

	</style>
</head>
<body>
	<?php include('header.php'); ?>
	<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">OUR PRODUCTS</h3>
	<?php
	    $con = OpenCon();
	    $query = "select * from aboutus";
	    $result = mysqli_query($con, $query);
		mysqli_close($con);
	    $row = mysqli_fetch_array($result);
    ?>
			<div class="col-md-6 about-w3right">
				<img src="images/pro1.jpg" class="img-responsive" alt="" style=" max-width:100% !important; " />
			</div>
			<div class="col-md-6 about-w3left">				
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseFour"
									aria-expanded="true" aria-controls="collapseFour"> <span
									class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
									class="glyphicon glyphicon-minus" aria-hidden="true"></i>DIGITAL MAPPING PRODUCT  - DIGITAL  MAPS
								</a>
							</h5>
						</div>
						<div id="collapseFour" class="panel-collapse collapse in"
							role="tabpanel" aria-labelledby="headingFour"
							aria-expanded="true">
							<div class="panel-body panel_text">
								<h1 style="margin-bottom: 10px;">Digital Street Maps</h1>
								<span>&#x2022;&nbsp;</span>We strive to be the single source for geospatial data made available quickly and to exact specifications 
								though our unique interactive map interface. Below is a listing of some of the major categories available
								for research on the site. Please feel free to contact us at any time with questions or if you do not see
								or are unsure of what data you need to complete your project.<br>
								<span>&#x2022;&nbsp;</span>Most up-to-date version of the highly accurate and highly detailed street data. Layers include attributed 
								streets, water, government boundaries, points of interest and many more.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div><br><br>
			<div class="container">
							<?php
	    $con = OpenCon();
	    $query = "select * from aboutus";
	    $result = mysqli_query($con, $query);
		mysqli_close($con);
	    $row = mysqli_fetch_array($result);
    ?>
			<div class="col-md-6 about-w3right">
				<img src="images/pro2.jpg" class="img-responsive" alt="" style=" max-width:100% !important; " />
			</div>
			<div class="col-md-6 about-w3left">
				
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseThree"
									aria-expanded="true" aria-controls="collapseThree"> <span
									class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
									class="glyphicon glyphicon-minus" aria-hidden="true"></i>DEMOGRAPHIC DATA 
							</a>
							</h5>
						</div>
						<div id="collapseFour" class="panel-collapse collapse in"
							role="tabpanel" aria-labelledby="headingFour"
							aria-expanded="true">
							<div class="panel-body panel_text">
								<h1 style="margin-bottom: 10px;"></h1>
								<span>&#x2022;&nbsp;</span>Latest Indian States demographics data created and maintained by Census of India etc. and formatted for use in ESRI, MapInfo, and Excel among others. The data can be obtained by custom areas,   ward, city, sub district, district or full states.<br>
								
							</div>
						</div>
					</div>
				</div>
	
			</div>
			<div class="clearfix"></div><br><br>
			<div class="container">
							<?php
	    $con = OpenCon();
	    $query = "select * from aboutus";
	    $result = mysqli_query($con, $query);
		mysqli_close($con);
	    $row = mysqli_fetch_array($result);
    ?>
			<div class="col-md-6 about-w3right">
				<img src="images/pro3.jpg" class="img-responsive" alt="" style=" max-width:100% !important; " />
			</div>

			<div class="col-md-6 about-w3left">
				
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseThree"
									aria-expanded="true" aria-controls="collapseThree"> <span
									class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
									class="glyphicon glyphicon-minus" aria-hidden="true"></i>Vehicle Tracking  System with Web and Mobile Application
							</a>
							</h5>
						</div>
						<div id="collapseFour" class="panel-collapse collapse in"
							role="tabpanel" aria-labelledby="headingFour"
							aria-expanded="true">
							<div class="panel-body panel_text">
								<h1 style="margin-bottom: 10px;"></h1>
								A power full and most robust device for applications such as fleet management, Taxi/CABS, logistics etc of an ISO 90012015 certified  Indian manufacturing company offers Vehicle GPS Tracker certified by The Automotive  Research Association of India A Institute of the Automotive Industry with Ministry of Heavy Industries and Public Enterprises, Government of India.<br>
								A small, compact device with highly reliable design with its intelligent alert/event engine with user defined conditions, it generates alert/event via GPRS and/or SMS directly and also supports features such as <br>
									<span>&#x2022;&nbsp;</span>engine on/off, <br>
									<span>&#x2022;&nbsp;</span>historic data,<br> 
									<span>&#x2022;&nbsp;</span>alerts <br>
									<span>&#x2022;&nbsp;</span>SOS,<br>
									<span>&#x2022;&nbsp;</span>Immobilization etc. <br>
							
								
							</div>
						</div>
					</div>
				</div>
	
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="contentArea">

        <div class="divPanel notop page-content">

        
            <div class="row-fluid">
            <!--Edit Main Content Area here-->
                <div class="span12" id="divMain">

				   <ul>
					<div id="consulting"></div>
						<li><strong class="heading">Key Features</strong>
							<br><br>
							<p id="arsh">
								<span>&#x2023;&nbsp;</span>Spy tracking with hidden installation.<br>
								<span>&#x2023;&nbsp;</span>Easy to install.<br>
								<span>&#x2023;&nbsp;</span>Data acquisition based on time, distance and angle allow to have precise on line tracking.<br>
								<span>&#x2023;&nbsp;</span>Sending acquired data via GPRS.<br>
								<span>&#x2023;&nbsp;</span>“Over the Air” Firmware Upgradation and remote configuration of the unit.<br></p>
							<br><br>		
						</li>
						</ul>
            </div>
             <div class="span12" id="divMain">

				   <ul>
					<div id="consulting"></div>
						<li><strong class="heading">Data collected from devices gives location of the vehicle to health and driving pattern</strong>
							<br><br>
								<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseThree"
									aria-expanded="true" aria-controls="collapseThree">Vehicle Diagnostics
							</a>
							</h5><br>
							<p id="arsh">
								<span>&#x2023;&nbsp;</span>Battery Condition : Condition of the car's battery based on realtime device feedback<br>
								<span>&#x2023;&nbsp;</span>Ignition Condition : Condition of the car's engine based on realtime error stats<br>
								</p>
							<br><br>		
						</li>
						<li>
							<br><br>
								<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseThree"
									aria-expanded="true" aria-controls="collapseThree">Geo-Fencing and Tracking
							</a>
							</h5><br>
							<p id="arsh">
								<span>&#x2023;&nbsp;</span>Last seen location : Last seen location of your vehicle on a map<br>
								<span>&#x2023;&nbsp;</span>Last seen at : Last seen location as an address<br>
								<span>&#x2023;&nbsp;</span>Locate my car : Navigation details to locate the car<br>
								</p>
							<br><br>		
						</li>
						<li>
							<br><br>
								<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseThree"
									aria-expanded="true" aria-controls="collapseThree">Driving Pattern and Statistics
							</a>
							</h5><br>
							<p id="arsh">
								<span>&#x2023;&nbsp;</span>Top speed of the car : Highest speed reached by the car<br>
								<span>&#x2023;&nbsp;</span>Distance travelled : Summary of the distance travelled in a day<br>
								<span>&#x2023;&nbsp;</span>Route summary : Interactive map of driving activity<br>
								</p>
							<br><br>		
						</li>
						<li>
							<br><br>
								<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseThree"
									aria-expanded="true" aria-controls="collapseThree">Alerts and Notification
							</a>
							</h5><br>
							<p id="arsh">
								<span>&#x2023;&nbsp;</span>Over speeding alert : Instant alert on over speeding as set by user<br>
								<span>&#x2023;&nbsp;</span>Geo-fencing alert : Instant alert on unauthorized movement of vehicle<br>
								<span>&#x2023;&nbsp;</span>Engine On / Off alert : Instant alert on Ignition On / Off <br>
								</p>
							<br><br>		
						</li>
						<li>
							<br><br>
								<h5 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse"
									data-parent="#accordion" href="#collapseThree"
									aria-expanded="true" aria-controls="collapseThree">Alerts Available are
							</a>
							</h5><br>
							<p id="arsh">
								<span>&nbsp;</span>1. Low Battery<br>
								<span>&nbsp;</span>2. Geo-fence<br>
								<span>&nbsp;</span>3. Ignition on-off<br>
								<span>&nbsp;</span>4. Over Speed<br>
								<span>&nbsp;</span>5. Tamper etc<br>
								</p>
							<br><br>		
						</li>

						</ul>
            </div>

           </div>
        <!--End Main Content here-->
 
         </div>
			<div class="clearfix"></div>
		</div>
	</div>
	</div>
	<!-- //about -->
	<!-- emergency_cases -->
	
	
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