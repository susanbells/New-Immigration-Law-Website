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



    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
          <h1 class="mb-3 mt-5 bread">Insights</h1>
</div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
        <?php
if(isset($_GET['p_id'])){
   $the_post_id = $_GET['p_id'];


}

$query = "SELECT * FROM posts WHERE post_id = $the_post_id";
$select_all_posts = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_all_posts)) {
    $post_title = $row['post_title'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];


?>
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"><?php echo $post_title;?></h2>
            <p><?php echo $post_date;?></p>
            <br>
            <p><?php echo $post_content;?></p>
            
          </div> <!-- .col-md-8 -->
   <?php } ?>
          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
            <?php 
            $query = "SELECT * FROM categories";
            $select_categories_query = mysqli_query($connection, $query);
            ?>
            	<h3>Categories</h3>
              <ul class="categories">
           <?php

               while($row = mysqli_fetch_assoc($select_categories_query)){
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
  
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



