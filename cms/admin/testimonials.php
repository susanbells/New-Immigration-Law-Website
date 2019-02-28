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
                          Testimonials
                        </h1>

 <?php


if(isset($_GET['source'])){

$source = $_GET['source'];


} else{

$source = '';

}

switch($source){
    case 'add_testimonials';
    include "includes/add_testimonials.php";
    break;

    case 'edit_testimonials';
    include "includes/edit_testimonials.php";
    break;

    default:
    include "includes/view_all_testimonials.php";
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