
<!DOCTYPE html>
<html>

<head>
	<title>Hindon Consulting Products</title>
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
<style type="text/css">
	
.row1
{
    
    margin-left:10%;
}
.column {
  float: left;
  width: 30%;
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
border: 4px solid #c1c1c1;	
}
.container1 {
  padding: 20px 16px;
  height: 120px;
  
}
.text
{
	text-align: justify;
	color: #000000;
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
	</style>
</head>

<body>
	<!-- header -->
	<?php include('header.php'); ?>
	<!-- banner -->

	<!--//banner -->
	<!-- departments -->
	<div class="services">

		<h3 class="heading-agileinfo">Our Products</h3>
	
		
			<div class="row1">

   <?php
        $con = OpenCon();
        
        $query_products = "select * from products";
        $result_products = mysqli_query($con,$query_products);
		mysqli_close($con);
         while($row_products = mysqli_fetch_array($result_products)) {               
                                    
   ?>
  <div class="column">
    <div class="card">
      <img class="img" src="admin/websitecontent/<?php echo $row_products['upload_image']; ?>" alt="Jane" style="width:100%">
      <div class="container1">
        <h2><?php echo $row_products['product_heading']; ?></h2>
        <p class="text"><?php echo $row_products['product_content']; ?></p>
         
        
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>

 <?php } ?>
 
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
</body>

</html>