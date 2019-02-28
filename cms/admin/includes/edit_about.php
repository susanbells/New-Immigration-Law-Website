<?php

if(isset($_GET['p_id'])){

$the_post_id = $_GET['p_id'];

}

$query = "SELECT * FROM posts WHERE post_id = $the_post_id";
   $select_posts_by_id = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
       $post_id = $row['post_id'];
       $post_title = $row['post_title'];
       $post_category = $row['post_category_id'];
       $post_date = $row['post_date'];
       $post_image = $row['post_image'];
       $post_content = $row['post_content'];

   }

   if(isset($_POST['update_post'])){

  
    $post_title = $_POST['post_title'];
    $post_category = $_POST['post_category'];
    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];
    $post_content = $_POST['post_content'];

    move_uploaded_file($post_image_temp, "../images/$post_image");   
 
    $query = "UPDATE posts SET ";
    $query .="post_title = '{$post_title}', ";
    $query .="post_category_id = '{$post_category}', ";
    $query .="post_date = now(), ";
    $query .="post_image = '{$post_image}', ";
    $query .="post_content = '{$post_content}' ";
    $query .="WHERE post_id = {$the_post_id} ";

    $update_post = mysqli_query($connection, $query);

    if(!$update_post) {
        die("QUERY FAILED " . mysqli_error($connection));
    }

    echo "<h4>Updated successfully! <a href='../posts-single.php?p_id={$the_post_id}'>View Post.</a></h4>";

}

?>



<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="home_page_video">Home Page Video</label>
<input type="file" name="home_page_video">
</div>

<div class="form-group">
<label for="home_page_image">Home Page Image</label>
<input type="file" name="home_page_image">
</div>


<div class="form-group">
<label for="about_image">About Image</label>
<input type="file" name="about_image">
</div>


<div class="form-group">
<label for="about_page_content">About Page Content</label>
<br>
<textarea id="mytextarea" class="ckeditor" name="about_page_content" id="body" cols="70" rows="10"></textarea>
</div>

<div class="form-group">
<label for="about_home_content">About Home Content</label>
<input type="text" class="form-control" name="about_home_content">
</div>

<div class="form-group">
<label for="contact_address">Contact Address</label>
<input type="text" class="form-control" name="contact_address">
</div>

<div class="form-group">
<label for="contact_number">Contact Number</label>
<input type="tel" class="form-control" name="contact_number">
</div>

<div class="form-group">
<label for="contact_email">Contact Email</label>
<input type="email" class="form-control" name="contact_email">
</div>

<div class="form-group">
<label for="contact_web">Contact Website</label>
<input type="text" class="form-control" name="contact_web">
</div>




<div class="form-group">
<input type="submit" class="btn btn-primary" name="create_info" value="Publish Info">
</div>

</form>