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
                          Recent Changes
                        </h1>

 <?php


if(isset($_GET['source'])){

$source = $_GET['source'];


} else{

$source = '';

}

switch($source){
    case 'add_changes';
    include "includes/add_changes.php";
    break;

    case 'edit_changes';
    include "includes/edit_changes.php";
    break;

    default:
    include "includes/view_all_changes.php";
    break;
}



 ?>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
       

       <?php 

include "includes/admin_footer.php"

?>