<?php
include "delete_modal.php";

?>


<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>

        </tr>
    </thead>

       <tbody>


<?php
   $query = "SELECT * FROM rchanges";
   $select_changes = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_changes)) {
    $changes_id = $row['changes_id'];
    $changes_title = $row['changes_title'];
    $changes_content = $row['changes_content'];
       echo "<tr>";
       echo "<td>{$changes_id}</td>";
       echo "<td>{$changes_title}</td>";    
       echo "<td>{$changes_content}</td>";
       echo "<td><a href='changes.php?source=edit_changes&c_id={$changes_id}'>Edit</a></td>";
       echo "<td><a href='javascript:void(0)' class='delete_link' rel='{$changes_id}'>Delete</a></td>";
       echo "</tr>";
   }

?>

</tbody>
</table> 

<?php

if(isset($_GET['delete'])){
    
$the_change_id = $_GET['delete'];
$query = "DELETE FROM rchanges WHERE changes_id = {$the_change_id}";
$delete_query = mysqli_query($connection, $query);
header("Location: changes.php");
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
