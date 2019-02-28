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
            	<h1 class="mb-3 mt-5 bread">Recent Changes</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">back to home</a></span> </p>
           <p>We have dedicated extensive resources to monitoring immigration regulatory developments and policy changes as they evolve worldwide.</p>
           </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<div class="row">

<?php


$query = "SELECT * FROM rchanges ORDER BY changes_date DESC";
$select_all_changes_query = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_all_changes_query)) {
    $changes_id = $row['changes_id'];
    $changes_title = $row['changes_title'];
    $changes_content = $row['changes_content'];
    $changes_date = $row['changes_date'];

?>
							<div class="col-md-6 ftco-animate">
		            <div class="card blog-entry" style="width: 18rem;">
		              <div class="text d-flex py-4">
		                <div class="card-body desc pl-3">
                        <div class="meta mt-5">
		                  <div><a href="#"><?php echo $changes_date; ?></a></div>
		                </div>
			                <p class="heading" style="font-size: 16px;"><a href="changes-single.php?c_id=<?php echo $changes_id?>"><?php echo $changes_title ?></a></p>
			              </div>
		              </div>
		            </div>
              </div>
<?php } ?>
		        
		       
		        

		        </div>
		        <div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
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

        

       

						

       


        
          </div><!-- END COL -->

        </div>
      </div>
    </section> <!-- .section -->

	
    <!-- Footer.php -->
<?php

include "includes/footer.php";

?>



