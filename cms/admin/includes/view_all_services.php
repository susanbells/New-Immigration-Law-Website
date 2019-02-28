
<?php
include "delete_modal.php";

?>


<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Service ID</th>
            <th>Service Title</th>
            <th>Image</th>
            <th>Service Subcontent</th>
            <th>Service Content</th>

        </tr>
    </thead>

       <tbody>


<?php
   $query = "SELECT * FROM services";
   $select_services = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_services)) {
       $service_id = $row['service_id'];
       $service_title = $row['service_title'];
       $service_image = $row['service_image'];
       $service_content = $row['service_content'];
       $service_subcontent = $row['service_subcontent'];
       echo "<tr>";
       echo "<td>{$service_id}</td>";
       echo "<td>{$service_title}</td>";    
       echo "<td><img class='img-responsive' src='../images/$service_image'></td>";
       echo "<td>{$service_subcontent}</td>";
       echo "<td>{$service_content}</td>";
       echo "<td><a href='services.php?source=edit_services&s_id={$service_id}'>Edit</a></td>";
       echo "<td><a href='javascript:void(0)' class='delete_link' rel='{$service_id}'>Delete</a></td>";
       echo "</tr>";
   }

?>

</tbody>
</table> 

<?php

if(isset($_GET['delete'])){
    
$the_service_id = $_GET['delete'];
$query = "DELETE FROM services WHERE service_id = {$the_service_id}";
$delete_query = mysqli_query($connection, $query);
header("Location: services.php");
}

?>


<script>

$(document).ready(function(){

$(".delete_link").on('click', function(){

var id = $(this).attr("rel");
 
var delete_url = "posts.php?delete="+ id +" ";

$(".modal_delete_link").attr("href", delete_url);

$("#exampleModal").modal('show');


});


});


</script>

