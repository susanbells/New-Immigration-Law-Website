<?php 

include "includes/admin_header.php"

?>


    <div id="wrapper">

<?php 

include "includes/admin_navigation.php"

?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Categories
                        </h1>

                        <div class="col-xs-6">

                        <?php 
                        if(isset($_POST['submit'])) {
                            $cat_title = $_POST['cat_title'];
                            
                            /* Precaution: if the input is empty, we must inform the user*/
                            
                            if ($cat_title == "" || empty($cat_title)) {
                                echo "Please add a category!";
                            } else {
                                $query = "INSERT INTO categories(cat_title) ";
                                $query .= "VALUE('{$cat_title}') ";

                                $create_category_query = mysqli_query($connection, $query);
                            
                                if (!$create_category_query) {
                                die('QUERY FAILED' .mysqli_error($connection));
                            }
                            }
                        }
                        
                        ?>



                        <form action="" method="post">
                        <div class="form-group">
                        <label for="cat_title">Add Category</label>
                        <input class="form-control" type="text" name="cat_title">
                        </div>
                        <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                        </div>
                        </form>

<?php //include edit_categories.php here

if(isset($_GET['edit'])){

$cat_id = $_GET['edit'];

include "includes/edit_categories.php";

}


?>



                        </div> <!--Add Category-->


                        <div class="col-xs-6">



                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php //find all categories query

                            $query = "SELECT * FROM categories";
                            $select_categories = mysqli_query($connection, $query);


                            while ($row = mysqli_fetch_assoc($select_categories)) {
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo "<tr>";
                                echo "<td>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td>";
                                echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                                echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                echo "</tr>";
                            }

                            
                            ?>
 
                            <?php //delete categories query
                            if(isset($_GET['delete'])) {
                                $the_cat_id = $_GET['delete'];

                            $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                            $delete_query = mysqli_query($connection, $query);
                            header("Location: categories.php");

                            }



                            ?>
                               
                            </tbody>
                        </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       

       <?php 

include "includes/admin_footer.php"

?>


