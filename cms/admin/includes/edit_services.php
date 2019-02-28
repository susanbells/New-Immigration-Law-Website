<?php

if(isset($_GET['s_id'])){

$the_service_id = $_GET['s_id'];

}

$query = "SELECT * FROM services WHERE service_id = $the_service_id ";
$select_services_by_id = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_services_by_id)) {
    $service_id = $row['service_id'];
    $service_title = $row['service_title'];
    $service_image = $row['service_image'];
    $service_content = $row['service_content'];
    $service_subcontent = $row['service_subcontent'];

   }


   if(isset($_POST['update_service'])){
      $service_title = $_POST['service_title'];
      $service_image = $_FILES['service_image']['name'];
      $service_image_temp = $_FILES['service_image']['tmp_name'];
      $service_content = $_POST['service_content'];
      $service_subcontent = $_POST['service_subcontent'];
  
      move_uploaded_file($service_image_temp, "../images/$service_image"); 

      if(empty($service_image)){

         $query = "SELECT * FROM services WHERE service_id = $the_service_id ";
         $select_image = mysqli_query($connection, $query);
         while($row = mysqli_fetch_array($select_image)){
            $service_image =$row['service_image'];
         }

      }
  
      $query = "UPDATE services SET ";
      $query .="service_title = '{$service_title}', ";
      $query .="service_image = '{$service_image}', ";
      $query .="service_content = '{$service_content}', ";
      $query .="service_subcontent = '{$service_subcontent}' ";
      $query .="WHERE service_id = {$the_service_id} ";
  
      $update_service = mysqli_query($connection, $query);
  
    
      echo "<h4>Updated successfully! <a href='../services-single.php?s_id={$the_service_id}'>View Service.</a></h4>";

   }

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="service_title">Service Title</label>
<input value="<?php echo $service_title; ?>" type="text" class="form-control" name="service_title">
</div>


<div class="form-group">
<label for="service_image">Service Image</label>
<input value="<?php echo $service_image; ?>" type="file" name="service_image">
</div>

<div class="form-group">
<label for="service_subcontent">Service Subcontent</label>
<input value="<?php echo $service_subcontent; ?>" type="text" class="form-control" name="service_subcontent">
</div>

<div class="form-group">
<label for="service_content">Service Content</label>
<br>
<textarea class="form-control" name="service_content" id="body" cols="70" rows="10">
<?php echo $service_content; ?>
</textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="update_service" value="Update Service">
</div>

</form>