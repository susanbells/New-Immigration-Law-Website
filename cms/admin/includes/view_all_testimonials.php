<?php
include "delete_modal.php";

?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Testimonial Content</th>
            <th>Testimonial Author</th>
            <th>Testimonial Author Profile</th>

        </tr>
    </thead>

       <tbody>


<?php
   $query = "SELECT * FROM testimonials";
   $select_testimonials = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_testimonials)) {
       $testimonial_id = $row['testimonial_id'];
       $testimonial_content = $row['testimonial_content'];
       $testimonial_author = $row['testimonial_author'];
       $testimonial_author_profile = $row['testimonial_author_profile'];
       echo "<tr>";
       echo "<td>{$testimonial_id}</td>";
       echo "<td>{$testimonial_content}</td>";    
       echo "<td>{$testimonial_author}</td>";
       echo "<td>{$testimonial_author_profile}</td>";
       echo "<td><a href='testimonials.php?source=edit_testimonials&t_id={$testimonial_id}'>Edit</a></td>";
       echo "<td><a href='javascript:void(0)' class='delete_link' rel='{$testimonial_id}'>Delete</a></td>";
       echo "</tr>";
   }

?>

</tbody>
</table> 

<?php

if(isset($_GET['delete'])){
    
$the_testimonial_id = $_GET['delete'];
$query = "DELETE FROM testimonials WHERE testimonial_id = {$the_testimonial_id}";
$delete_query = mysqli_query($connection, $query);
header("Location: testimonials.php");
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