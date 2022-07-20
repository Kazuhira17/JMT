<?php session_start(); ?>
<?php include  "header.php"; ?>
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Now Showing</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div>
	<img src="images/nowshowing.png" alt="Now Showing" style="width:100%;height:100%;">
	<br>
	
	</div>
	<!-- End Menu -->

	<!-- Start Contact -->
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						
						<p>Fill up form for ticket reservations</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form  action="" method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<!-- <div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div> -->
							<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" name="rev" required data-error="Please Select Person">
									<option value="">Select a Movie</option>
									  <option value="Thor Love and Thunder">Thor Love and Thunder</option>
									  <option value="Minions The Rise of Gru">Minions The Rise of Gru</option>
									  <option value="Jurasic World Dominion">Jurasic World Dominion</option>
									  
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" rows="4" name="desc" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button name="sb" class="btn btn-common" id="submit" type="submit">Submit</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
					<?php
					if(isset($_POST['sb']))
					{
						$nm = $_POST['name'];
						$rev = $_POST['rev'];
						$des = $_POST['desc'];
						include "connect.php";
						mysqli_query($con,"insert into review(name, review, description) values('$nm','$rev','$des')");
						echo "<h2 style='color:tomato; text-align:center;'>Data Addedd SuccessFully</h2>";
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php" ?>	

