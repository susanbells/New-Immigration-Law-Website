<?php

if(isset($_GET['c_id'])){

   $the_changes_id = $_GET['c_id'];
   
   }
   
   $query = "SELECT * FROM rchanges WHERE changes_id = $the_changes_id";
      $select_changes_by_id = mysqli_query($connection, $query);
   
   
      while ($row = mysqli_fetch_assoc($select_changes_by_id)) {
          $changes_id = $row['changes_id'];
          $changes_title = $row['changes_title'];
          $changes_date = $row['changes_date'];
          $changes_content = $row['changes_content'];
   
      }
   
      if(isset($_POST['update_changes'])){
   
     
       $changes_title = $_POST['changes_title'];
       $changes_content = $_POST['changes_content'];
     
    
       $query = "UPDATE rchanges SET ";
       $query .="changes_title = '{$changes_title}', ";
       $query .="changes_date = now(), ";
       $query .="changes_content = '{$changes_content}' ";
       $query .="WHERE changes_id = {$the_changes_id} ";
   
       $update_changes = mysqli_query($connection, $query);
   
       if(!$update_changes) {
           die("QUERY FAILED " . mysqli_error($connection));
       }
   
       echo "<h4>Updated successfully! <a href='../changes-single.php?c_id={$the_changes_id}'>View Post.</a></h4>";
   }

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="changes_title">Title</label>
<input value="<?php echo $changes_title; ?>" type="text" class="form-control" name="changes_title">
</div>


<div class="form-group">
<label for="changes_content">Post Content</label>
<br>
<textarea class="form-control" name="changes_content" id="mytextarea" cols="70" rows="10">
<?php echo $changes_content; ?>
</textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="update_changes" value="Update Recent Changes">
</div>

</form>