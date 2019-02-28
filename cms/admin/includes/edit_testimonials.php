<?php

if(isset($_GET['t_id'])){

$the_testimonial_id = $_GET['t_id'];

}

$query = "SELECT * FROM testimonials WHERE testimonial_id = $the_testimonial_id ";
$select_testimonials_by_id = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_testimonials_by_id)) {
    $testimonial_id = $row['testimonial_id'];
    $testimonial_content = $row['testimonial_content'];
    $testimonial_author = $row['testimonial_author'];
    $testimonial_author_profile = $row['testimonial_author_profile'];

   }


   if(isset($_POST['update_testimonial'])){

    $testimonial_content = $_POST['testimonial_content'];
    $testimonial_author = $_POST['testimonial_author'];
    $testimonial_author_profile = $_POST['testimonial_author_profile'];
  
  
      $query = "UPDATE testimonials SET ";
      $query .="testimonial_content = '{$testimonial_content}', ";
      $query .="testimonial_author = '{$testimonial_author}', ";
      $query .="testimonial_author_profile = '{$testimonial_author_profile}' ";
      $query .="WHERE testimonial_id = {$the_testimonial_id} ";
  
      $update_testimonial = mysqli_query($connection, $query);
  
      echo "<h4>Updated successfully!</h4>";
     

   }

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="testimonial_author">Testimonial Author</label>
<input value="<?php echo $testimonial_author; ?>" type="text" class="form-control" name="testimonial_author">
</div>

<div class="form-group">
<label for="testimonial_author_profile">Testimonial Author Profile</label>
<input value="<?php echo $testimonial_author_profile; ?>" type="text" class="form-control" name="testimonial_author_profile">
</div>


<div class="form-group">
<label for="testimonial_content">Testimonial Content</label>
<br>
<textarea class="form-control" name="testimonial_content" id="mytextarea" cols="70" rows="10">
<?php echo $testimonial_content; ?>
</textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="update_testimonial" value="Update Testimonial">
</div>

</form>