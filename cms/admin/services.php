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
                          Services
                        </h1>

 <?php


if(isset($_GET['source'])){

$source = $_GET['source'];


} else{

$source = '';

}
switch($source){
    case 'add_services';
    include "includes/add_services.php";
    break;

    case 'edit_services';
    include "includes/edit_services.php";
    break;

    default:
    include "includes/view_all_services.php";
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