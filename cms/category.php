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
            	<h1 class="mb-3 mt-5 bread">Insights</h1>
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
          <div class="col-lg-8 ftco-animate">
          	<div class="row">

<?php
if(isset($_GET['category'])){

$post_category = $_GET['category'];

}

$query = "SELECT * FROM posts WHERE post_category_id = $post_category ORDER BY post_date DESC";
$select_all_posts_query = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];

?>

							<div class="col-md-6 ftco-animate">
		            <div class="blog-entry">
		              <a href="posts-single.php?p_id=<?php echo $post_id;?>" class="block-20" style="background-image: url('images/<?php echo $post_image; ?>');">
		              </a>
		              <div class="text d-flex py-4">
		                <div class="meta mb-3">
		                  <div><a href="#"><?php echo $post_date; ?></a></div>
		                </div>
		                <div class="desc pl-3">
			                <h3 class="heading"><a href="posts-single.php?p_id=<?php echo $post_id;?>"><?php echo $post_title ?></a></h3>
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
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
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

        

       

						

       


        
          </div><!-- END COL -->

        </div>
      </div>
    </section> <!-- .section -->

	
    <!-- Footer.php -->
<?php

include "includes/footer.php";

?>



