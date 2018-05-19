
<!DOCTYPE html>
<html>

<head>
	<title>Hindon Consulting Services</title>
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

 <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

<link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">




	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
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

#arsh{
	white-space: pre-wrap;
}


	</style>
</head>

<body>


	<!-- header -->
	<?php include('header.php'); ?>
	<!-- banner -->

	<!--//banner -->
	<!-- departments -->
	<div class="services">

				<h3 class="heading-agileinfo" style="margin-bottom: -2.9em !important;">Our Services</h3>
	 <div class="contentArea">

        <div class="divPanel notop page-content">

        
            <div class="row-fluid">
            <!--Edit Main Content Area here-->
                <div class="span12" id="divMain">

				   <ul>
					<div id="consulting"></div>
					 <?php
						    $con = OpenCon();
						    $query = "select * from services";
						    $result = mysqli_query($con, $query);
							mysqli_close($con);
						    while($row = mysqli_fetch_array($result)) {
						  ?>
						<li><strong class="heading"><?php echo $row['heading']; ?></strong>
							<br><br>
							<p id="arsh"><?php echo $row['content']; ?></p>
							<br><br>		
						</li>
						<?php } ?>
						<br>

						
							
					
						
						</ul>
						</li>

						</ul>
                                    
        <!--End Main Content here-->
 
            </div>

                </div>
        <!--End Main Content here-->
 
            </div>

		
		

			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //departments -->
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
	   <script type="text/javascript" src="js/default.js"></script>
</body>

</html>