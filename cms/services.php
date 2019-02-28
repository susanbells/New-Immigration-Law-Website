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


    <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(images/bg_5.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Services</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">back to home</a></span> </p>
           <p>Browse through our array of insights on important issues in worldwide immigration.</p>
           </div>

          </div>
        </div>
      </div>
    </section>

       <section class="ftco-section">
      <div class="container">
        <div class="row">
        <?php
if(isset($_GET['service'])){

$service_query = $_GET['service'];

}

$query = "SELECT * FROM services WHERE service_id = $service_query";
$select_all_services_query = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_all_services_query)) {
    $service_id = $row['service_id'];
    $service_title = $row['service_title'];
    $service_content = $row['service_content'];

?>
    
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"><?php echo $service_title;?></h2>

            <?php echo $service_content?></p>
            
          </div> <!-- .col-md-8 -->
<?php }?>
          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
            <?php
            $query = "SELECT * FROM services";
            $select_services_query = mysqli_query($connection, $query);
            
            ?>
            	<h3>Other Services</h3>
              <ul class="categories">
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

          

        



        </div>
      </div>
    </section> <!-- .section -->

		    <!-- Footer.php -->
<?php

include "includes/footer.php";

?>



