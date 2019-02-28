<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Comment ID</th>
            <th>Comment Author</th>
            <th>Comment Email</th>
            <th>Date</th>
            <th>Status</th>
            <th>Content</th>
            <th>In Response to</th>
            <th>Approve</th>
            <th>Reject</th>
            <th>Delete</th>
        </tr>
    </thead>

       <tbody>


<?php
   $query = "SELECT * FROM comments";
   $select_comments = mysqli_query($connection, $query);


   while ($row = mysqli_fetch_assoc($select_comments)) {
       $comment_id = $row['comment_id'];
       $comment_post_id = $row['comment_post_id'];
       $comment_date = $row['comment_date'];
       $comment_status = $row['comment_status'];
       $comment_author = $row['comment_author'];
       $comment_email = $row['comment_email'];
       $comment_content = $row['comment_content'];
       echo "<tr>";
       echo "<td>{$comment_id}</td>";
       echo "<td>{$comment_author}</td>";
       echo "<td>{$comment_email}</td>";
       echo "<td>{$comment_date}</td>";
       echo "<td>{$comment_status}</td>";
       echo "<td>{$comment_content}</td>";

       $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
       $select_post_id_query = mysqli_query($connection, $query);
       while($row = mysqli_fetch_assoc($select_post_id_query)) {
           $post_id = $row['post_id'];
           $post_title = $row['post_title'];
           echo "<td><a href='../posts.php?p_id=$post_id'>$post_title</a></td>";
       }
     
       echo "<td><a href='comments.php?approve={$comment_id}'>Approve</a></td>";
       echo "<td><a href='comments.php?reject={$comment_id}'>Reject</a></td>";
       echo "<td><a href='comments.php?delete={$comment_id}'>Delete</a></td>";
       echo "</tr>";
   }

?>

</tbody>
</table> 

<?php 

//Approve comments

if(isset($_GET['approve'])){
$the_comment_id = $_GET['approve'];

$query = "UPDATE comments SET comment_status = 'approve' WHERE comment_id = $the_comment_id ";
$approve_comment_query = mysqli_query($connection, $query);
header("Location: comments.php");
}


//Reject comments


if(isset($_GET['reject'])){
$the_comment_id = $_GET['reject'];

$query = "UPDATE comments SET comment_status = 'reject' ";
$reject_comment_query = mysqli_query($connection, $query);
header("Location: comments.php");
}

//Delete comments


if(isset($_GET['delete'])){
    $the_comment_id = $_GET['delete'];

$query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
$delete_query = mysqli_query($connection, $query);
header("Location: comments.php");
}

?>



