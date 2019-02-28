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
<label for="post_title">Post Title</label>
<input value="<?php echo $post_title; ?>" type="text" class="form-control" name="post_title">
</div>

<div class="form-group">
<label for="post_category">Post Category</label>
<select name="post_category" id="post_category">
<?php
   $query = "SELECT * FROM categories";
   $select_categories= mysqli_query($connection, $query);

   while ($row = mysqli_fetch_assoc($select_categories)) {
       $cat_id = $row['cat_id'];
       $cat_title = $row['cat_title'];


    echo "<option value='{$cat_id}'>{$cat_title}</option>";
   }

?>


</select>
</div>


<div class="form-group">
<label for="post_image">Post Image</label>
<input value="<?php echo $post_image; ?>" type="file" name="post_image">
</div>

<div class="form-group">
<label for="post_content">Post Content</label>
<br>
<textarea class="form-control" name="post_content" id="mytextarea" cols="70" rows="10">
<?php echo $post_content; ?>
</textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="update_post" value="Update Post">
</div>

</form>