<?php
 

if(isset($_POST['create_post'])){

#    $post_id = $_POST['post_id'];
    $post_title = $_POST['post_title'];
    $post_category = $_POST['post_category'];
    $post_date = date('F m Y');
    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];
    $post_content = $_POST['post_content'];


move_uploaded_file($post_image_temp, "../images/$post_image");
    
$query = "INSERT INTO posts(post_category_id, post_title, post_date, post_image, post_content)";

$query .= "VALUES('{$post_category}', '{$post_title}', now(), '{$post_image}', '{$post_content}') ";

$create_post_query = mysqli_query($connection,$query);

if(!$create_post_query) {
    die("QUERY FAILED" . mysqli_error($connection));
}

}


?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="post_title">Post Title</label>
<input type="text" class="form-control" name="post_title">
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
<input type="file" name="post_image">
</div>


<div class="form-group">
<label for="post_content">Post Content</label>
<br>
<textarea id="mytextarea" name="post_content" id="body" cols="70" rows="10"></textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
</div>

</form>