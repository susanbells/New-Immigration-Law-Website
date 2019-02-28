<?php
 

if(isset($_POST['create_service'])){

#    $post_id = $_POST['post_id'];
    $service_title = $_POST['service_title'];
    $service_image = $_FILES['service_image']['name'];
    $service_image_temp = $_FILES['service_image']['tmp_name'];
    $service_content = $_POST['service_content'];
    $service_subcontent = $_POST['service_subcontent'];


move_uploaded_file($service_image_temp, "../images/$service_image");
    
$query = "INSERT INTO services(service_title, service_image, service_content, service_subcontent)";

$query .= "VALUES('{$service_title}', '{$service_image}', '{$service_content}', '{$service_subcontent}') ";

$create_service_query = mysqli_query($connection,$query);

if(!$create_service_query) {
    die("QUERY FAILED" . mysqli_error($connection));
}

}


?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="service_title">Service Title</label>
<input type="text" class="form-control" name="service_title">
</div>


<div class="form-group">
<label for="service_image">Service Image</label>
<input type="file" name="service_image">
</div>

<div class="form-group">
<label for="service_subcontent">Service Subcontent</label>
<input type="text" class="form-control" name="service_subcontent">
</div>


<div class="form-group">
<label for="service_content">Service Content</label>
<br>
<textarea id="mytextarea" class="ckeditor" name="service_content" id="body" cols="70" rows="10"></textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="create_service" value="Publish Service">
</div>

</form>