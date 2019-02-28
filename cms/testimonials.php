<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimonials</span>
            <h2 class="mb-4">Satisfied Clients</h2>
            <p>Here’s what a small selection of our clients have to say about us:</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">

<?php


$query = "SELECT * FROM testimonials";
$select_all_posts_query = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
    $testimonial_content = $row['testimonial_content'];
    $testimonial_author = $row['testimonial_author'];
    $testimonial_author_profile = $row['testimonial_author_profile'];


?>





              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/testimonial.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line"><?php echo $testimonial_content ?></p>
                    <p class="name"><?php echo $testimonial_author ?></p>
                    <span class="position"><?php echo $testimonial_author_profile ?></span>
                  </div>
                </div>
              </div>
          
<?php

}
?>

   
   </div>
          </div>
        </div>
      </div>
    </section>