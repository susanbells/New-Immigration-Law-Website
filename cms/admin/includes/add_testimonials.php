<?php
 

if(isset($_POST['create_testimonial'])){

$testimonial_content = $_POST['testimonial_content'];
$testimonial_author = $_POST['testimonial_author'];
$testimonial_author_profile = $_POST['testimonial_author_profile'];
    
$query = "INSERT INTO testimonials(testimonial_content, testimonial_author,testimonial_author_profile)";

$query .= "VALUES('{$testimonial_content}', '{$testimonial_author}', '{$testimonial_author_profile}') ";

$create_testimonial_query = mysqli_query($connection,$query);

if(!$create_testimonial_query) {
    die("QUERY FAILED" . mysqli_error($connection));
}

}


?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="testimonial_author">Testimonial Author</label>
<input type="text" class="form-control" name="testimonial_author">
</div>

<div class="form-group">
<label for="testimonial_author_profile">Testimonial Author Profile</label>
<input type="text" class="form-control" name="testimonial_author_profile">
</div>


<div class="form-group">
<label for="testimonial_content">Testimonial Content</label>
<br>
<textarea id="mytextarea" class="ckeditor" name="testimonial_content" id="body" cols="70" rows="10"></textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="create_testimonial" value="Publish Testimonial">
</div>

</form>