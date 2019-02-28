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
      <div class="slider-item js-fullheight" style="background-image:url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Insights</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">back to home</a></span> </p>
           <p>Explore our insights, observations and experiences in the dynamic field of immigration. Our diverse group of immigration professionals discuss key issues and ongoing changes in major business destinations worldwide.</p>
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
#pagination
/*

if(isset($_GET['page'])){

$per_page = 4;

$page = $_GET['page'];

} else{

  $page = "";

}

if($page == "" || $page == 1){

$page_1 = 0;

} else{

$page_1 = ($page * $per_page) - $per_page;

}


$post_query_count = "SELECT * FROM posts"; 
$find_count = mysqli_query($connection, $post_query_count);
$count = mysqli_num_rows($find_count);

$count = ceil($count / $per_page);

#end of pagination
*/

$query = "SELECT * FROM posts ORDER BY post_date DESC";
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

                  <?php /*
                  #pagination
                  for($i = 1; $i <= $count; $i++){

                    echo " <li><a href='posts.php?page={$i}'>{$i}</a></li>";

                  }
                  #end of pagination */
                  ?>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->



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

        

       

						

       


        
          </div><!-- END COL -->

        </div>
      </div>
    </section> <!-- .section -->

	
    <!-- Footer.php -->
<?php

include "includes/footer.php";

?>



