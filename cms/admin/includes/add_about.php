<?php
if(isset($_POST['create_info'])){

        $about_home_content = $_POST['post_title'];
        $about_page_content = $_POST['post_category'];
        $about_image = $_FILES['post_image']['name'];
        $about_image_temp = $_FILES['post_image']['tmp_name'];
        $home_page_image = $_FILES['post_image']['name'];
        $home_page_image_temp = $_FILES['post_image']['tmp_name'];
        $home_page_video = $_FILES['post_image']['name'];
        $home_page_video_temp = $_FILES['post_image']['tmp_name'];
        $contact_address = $_POST['post_content'];
        $contact_email = $_POST['post_content'];
        $contact_number = $_POST['post_content'];
        $contact_web = $_POST['post_content'];
    
    
    move_uploaded_file($home_page_image_temp, "../images/ $home_page_image");
    move_uploaded_file($about_image_temp, "../images/$about_image");
    move_uploaded_file($home_page_video_temp, "../images/$home_page_video");
        
    $query = "INSERT INTO about(post_category_id, post_title, post_date, post_image, post_content)";
    
    $query .= "VALUES('{$post_category}', '{$post_title}', now(), '{$post_image}', '{$post_content}') ";
    
    $create_post_query = mysqli_query($connection,$query);
    
    if(!$create_post_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    
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