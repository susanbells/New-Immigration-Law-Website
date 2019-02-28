<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$number = $_POST['number'];
$categories = $_POST['categories'];
$message = $_POST['message'];

$to = "sonaliverghese@ymail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an email through your website, from ".$name.".\n\n".$message;

mail($to, $categories, $number, $txt, $headers);
header("Location: index.php?mailsend");

}


?>


<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
			<div class="container">
				<div class="row align-items-md-center">
					<div class="col-md-5 pt-5">
						<form action="#" class="consult-form py-5">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group mb-4">
			    					<label for="#">Name</label>
			    					<input type="text" name="email" class="form-control" placeholder="Name">
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
			    					<label for="#">Email Address</label>
			    					<input type="text" name="email" class="form-control" placeholder="Email Address">
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
                  <label for="#">Contact Number</label>
			    					<input type="tel" name="number" class="form-control" placeholder="Contact Number">
		              </div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
		      					<label for="#">Services(optional)</label>
		      					<div class="form-field">
		        					<div class="select-wrap">
		                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                    <select name="categories" id="" class="form-control">
												<?php 
							 $query = "SELECT * FROM services";
							 $select_services_query = mysqli_query($connection, $query);
							 
							 while($row = mysqli_fetch_assoc($select_services_query)){
								 $service_id = $row['service_id'];
								 $service_title = $row['service_title'];
								 echo "<option value='services.php?service={$service_id}'>{$service_title}</option>";
								
								}

?>

		                    </select>
		                  </div>
			              </div>
		              </div>
								</div>
								<div class="col-md-12">
									<div class="form-group mb-4">
			    					<label for="#">Message</label>
			              <textarea name="message" id="" cols="30" rows="7" class="form-control form-control-2 d-flex align-items-center" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group mb-4">
			              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
							</div>
	    			</form>
					</div>
					<div class="col-md-7 wrap-about pb-5 ftco-animate">
	          <div class="heading-section mb-md-5 pl-md-5 mt-md-5 pt-3">
	          	<div class="pl-md-3">
		          	<span class="subheading">Connect</span>
		            <h2 class="mb-4">Get in touch</h2>
	            </div>
	          </div>
	          <div class="pl-md-3">
	          	<p>Please complete the form to send us a question or comment, or you can send us an email to lawyers@myerson.co.uk</p>
	          	<p>All the details you provide are handled in accordance with the Data Protection Act (1998) and we never share your data with anyone.</p>
						</div>
					</div>
				</div>
			</div>
		</section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5 d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
						<?php
							 $query = "SELECT * FROM services LIMIT 5";
							 $select_services_query = mysqli_query($connection, $query);		
						?>
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
							<?php
           while($row = mysqli_fetch_assoc($select_services_query)){
						 $service_id = $row['service_id'];
              $service_title = $row['service_title'];
              echo "<li><a href='services.php?service={$service_id}'>{$service_title}</a></li>";
              }
           
           ?>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="about.php">About</a></li>
                <li><a href="changes.php">Recent Changes</a></li>
                <li><a href="posts.php">Insights</a></li>
								<li><a href="includes/login.php">Admin</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Question?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
  </body>
</html>