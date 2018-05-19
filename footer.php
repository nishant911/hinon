

	<!-- footer -->
	<div class="footer_top_agile_w3ls">
		<div class="container">
			<div class="col-md-8 footer_grid">
					<?php
   			$con = OpenCon();
            $query_about = "select * from aboutus";
            $result_about = mysqli_query($con, $query_about);
           	$row_about = mysqli_fetch_array($result_about);
           mysqli_close($con);
           ?>
				<h3>About Us</h3>
				<p><?php echo $row_about['content1']; ?></p>
			</div>
			<?php
   			$con = OpenCon();
            $query = "select * from contactus";
            $result = mysqli_query($con, $query);
           	$row = mysqli_fetch_array($result);
           mysqli_close($con);
           ?>
			
			<div class="col-md-3 footer_grid" style="margin-left: 8%;">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row['address']; ?></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $row['email']; ?></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $row['phone_number']; ?></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer_wthree_agile">
		<p>© 2018 All rights reserved | Design by <a href="http://www.javnicsolutions.com" target="_blank">Javnis Solutions</a></p>
	</div>
	<!-- //footer -->
	<!-- bootstrap-modal-pop-up -->
<!-- //bootstrap-modal-pop-up --> 

