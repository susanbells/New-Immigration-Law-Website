<!--db.php-->
<?php

include "includes/db.php";

?>

<!--Header.php-->
<?php

include "includes/header.php";
?>

<!--Navigation.php-->
<?php
include "includes/navigation.php";

?>  

<!-- HEADER AND VIDEO -->

    <section class="hero-wrap d-flex js-fullheight">
    	<div class="forth js-fullheight d-flex align-items-center">
    		<div class="text">
    			<h1>A world of difference in immigration.</h1>
    			<h2 class="mb-5">Immigration Lawyers, solicitors and consultants</h2>
    			<p><a href="contact.php" class="btn-custom py-3 pr-2">Contact</a></p>
    		</div>
    	</div>
    	<div class="third about-img js-fullheight" style="background-image: url(images/mainImage.jpg);">
    		<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
      		<span class="icon-play"></a>
      	</a>
    	</div>
    </section>

<!-- MESSAGE FORM -->
    <section class="ftco-consult bg-light">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-lg-2 text-lg-right">
    				<h3 class="mb-4 mb-lg-0">Our Mission:</h3>
    			</div>
    			<div class="col-lg-10">
                We strive to be an integral part of our clients’ success by providing representation, services and strategic advice to facilitate the hiring and movement of skilled talent globally.
                The relationship with our clients is of paramount importance to us and that is why our clients stay with us. 
                We develop friendships with our clients, this allows us to identify your personal and or business needs resulting in effectiveness in achieving your goals.
	    		</div>
    		</div>
    	</div>
    </section>

    
<!-- PRACTICE AREAS -->

    <section class="ftco-section ftco-services">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-lg-7 heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Worldwide Immigration Solutions</h2>
            <p>From individuals and small local businesses to the world’s largest companies, we support all of your immigration needs, all over the world.</p>
          </div>
        </div>
				<div class="row">
                <?php


$query = "SELECT * FROM services";
$select_all_services_query = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_all_services_query)) {
	$service_id = $row['service_id'];
    $service_title = $row['service_title'];
    $service_subcontent = $row['service_subcontent'];
    $service_image = $row['service_image'];

?>  

          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body">
                
<!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
		<img class="card-img-top block-20" src="images/<?php echo $service_image; ?>" alt="Service Image">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <h4 class="card-title"><?php echo $service_title ?></h4>
    <p class="card-text"><?php echo $service_subcontent ?></p>
    <a href="services-single.php?s_id=<?php echo $service_id;?>" class="btn btn-primary">Learn More</a>

  </div>
</div>
<!-- End of Card -->

              </div>
            </div>      
          </div>
          <?php } ?>        
        
        </div>
			</div>
		</section>



    <!-- RANDOM INFO -->

    <section class="ftco-section ftc-no-pt">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image: url(images/practice-3.jpg);">
					</div>
					<div class="col-md-7 wrap-about pt-md-5 ftco-animate">
	          <div class="heading-section mb-5 pt-5 pl-md-5">
	          	<div class="pr-md-5 mr-md-5 text-md-right">
	          		<span class="subheading">Our Ethos</span>
		            <h2 class="mb-4">Culture & Values</h2>
	            </div>
	          </div>
	          <div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
	            <div class="services-wrap d-flex">
	              <div class="icon d-flex justify-content-center align-items-center">
	            		<span class="flaticon-auction"></span>
	              </div>
	              <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
	                <h3 class="heading">Highest Ethical Standards</h3>
	                <p>This is the key to sustaining our future and the trust of all those with whome we work.</p>
	              </div>
	            </div>
	            <div class="services-wrap d-flex">
	              <div class="icon d-flex justify-content-center align-items-center">
	            		<span class="flaticon-auction"></span>
	              </div>
	              <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
	                <h3 class="heading">Commitment to Clients' Mission and Objectives</h3>
	                <p>This ensures we can further their business goals and our own.</p>
	              </div>
	            </div>
	            <div class="services-wrap d-flex">
	              <div class="icon d-flex justify-content-center align-items-center">
	            		<span class="flaticon-auction"></span>
	              </div>
	              <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
	                <h3 class="heading">Drive Innovation and Change</h3>
	                <p>This is vital to continuously improving the excellence of our service and its delivery.</p>
	              </div>
	            </div>
						</div>
					</div>
				</div>
			</div>
        </section>
        
        <!-- TESTIMONIALS -->

    <!--Testimonials.php-->
<?php

include "testimonials.php";

?>

<!-- ABOUT -->

<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/practice-2.jpg);">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	<span class="subheading">about me</span>
		            <h2 class="mb-4">Poonam</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
							<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							<ul class="ftco-social d-flex">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
						</div>
					</div>
				</div>
			</div>
        </section>
        

<!-- INSIGHTS -->
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Latest News</span>
            <h2 class="mb-4">Insights</h2>
            <p>Keep up-to-date with the latest legal news and expert opinions.</p>
          </div>
        </div>	
				<div class="row">

<?php


$query = "SELECT * FROM posts ORDER BY post_date DESC LIMIT 3";
$select_all_posts_query = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
	$post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];


?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="posts-single.php?p_id=<?php echo $post_id;?>" class="block-20" style="background-image: url('images/<?php echo $post_image; ?>');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#"><?php echo $post_date; ?></a></div>
                </div>
                <div class="desc">
	                <h3 class="heading"><a href="posts-single.php?p_id=<?php echo $post_id;?>"><?php echo $post_title ?></a></h3>
	              </div>
              </div>
            </div>
          </div>

<?php } ?>
            <h4><a href="posts.php">More Insights -></a></h4>
        
        </div>
			</div>
        </section>
        
        <!-- FOOTER -->

<!-- Footer.php -->
<?php

include "includes/footer.php";

?>