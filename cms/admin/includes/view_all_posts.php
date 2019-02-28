<?php
include "delete_modal.php";

?>


<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Post ID</th>
            <th>Post Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Image</th>

        </tr>
    </thead>

       <tbody>


<?php
   $query = "SELECT * FROM posts";
   $select_posts = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_posts)) {
       $post_id = $row['post_id'];
       $post_title = $row['post_title'];
       $post_category = $row['post_category_id'];
       $post_date = $row['post_date'];
       $post_image = $row['post_image'];
       echo "<tr>";
       echo "<td>{$post_id}</td>";
       echo "<td>{$post_title}</td>";

       $query = "SELECT * FROM categories WHERE cat_id = $post_category";
       $select_categories_id = mysqli_query($connection, $query);
   
       while ($row = mysqli_fetch_assoc($select_categories_id)) {
           $cat_id = $row['cat_id'];
           $cat_title = $row['cat_title'];
           
           echo "<td>{$cat_title}</td>";
    }


       echo "<td>{$post_date}</td>";
       echo "<td><img width='100' src='../images/$post_image'></td>";
       echo "<td><a href='posts.php?source=edit_posts&p_id={$post_id}'>Edit</a></td>";
       echo "<td><a href='javascript:void(0)' class='delete_link' rel='{$post_id}'>Delete</a></td>";
       echo "</tr>";
   }

?>

</tbody>
</table> 

<?php

if(isset($_GET['delete'])){
    
$the_post_id = $_GET['delete'];
$query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
$delete_query = mysqli_query($connection, $query);
header("Location: posts.php");
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
