<?php
 
 if(isset($_POST['create_changes'])){

        $changes_title = $_POST['changes_title'];
        $changes_content = $_POST['changes_content'];
        $changes_date = date('F m Y');
        
    $query = "INSERT INTO rchanges(changes_title, changes_date, changes_content)";
    
    $query .= "VALUES('{$changes_title}', now(), '{$changes_content}' ) ";
    
    $create_changes_query = mysqli_query($connection,$query);
    
    if(!$create_changes_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    
    }


?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="changes_title">Title</label>
<input type="text" class="form-control" name="changes_title">
</div>


<div class="form-group">
<label for="changes_content">Content</label>
<br>
<textarea id="mytextarea" class="ckeditor" name="changes_content" id="body" cols="70" rows="10"></textarea>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" name="create_changes" value="Publish Recent changes">
</div>

</form>