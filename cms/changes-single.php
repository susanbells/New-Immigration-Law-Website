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
      <div class="slider-item js-fullheight" style="background-image:url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Recent Changes</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Back to home</a></span> </p>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
        <?php
if(isset($_GET['c_id'])){
   $the_change_id = $_GET['c_id'];


}

$query = "SELECT * FROM rchanges WHERE changes_id = $the_change_id";
   $select_all_services = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_all_services)) {
    $changes_title = $row['changes_title'];
    $changes_content = $row['changes_content'];


?>
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"><?php echo $changes_title;?></h2>
            <p>
            <?php echo $changes_content;?>
            </p>
            
          </div> <!-- .col-md-8 -->
   <?php }?>
          <div class="col-lg-4 sidebar ftco-animate">
        
            <div class="sidebar-box ftco-animate">
            <?php 
            $query = "SELECT * FROM rchanges ORDER BY changes_date DESC LIMIT 5";
            $select_changes_query = mysqli_query($connection, $query);
            ?>
            	<h3>Recent Changes</h3>
              <ul class="categories">
           <?php

               while($row = mysqli_fetch_assoc($select_changes_query)){

                $changes_title = $row['changes_title'];
                echo "<li><a href='#'>{$changes_title}</a></li>";
  
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



