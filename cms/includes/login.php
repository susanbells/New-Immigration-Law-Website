<!--db.php-->
<?php

include "db.php";

?>

<!--Header.php-->
<?php

include "header.php";
?>



<?php

function escape_string($string){
    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function query($sql){
    global $connection;

    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;

    if(!$result){
        die("QUERY FAILED " . mysqli_error($connection));
    }
}

function redirect($location){
   
    return header("Location: $location ");
}

function set_message($message){

if(!empty($message)){

    $_SESSION['message'] = $message;
} else{

$message = "";

}

}

function display_message(){

if(isset($_SESSION['message'])){

echo $_SESSION['message'];
unset($_SESSION['message']);

}


}



if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);
$password = escape_string($_POST['password']);


$query = query("SELECT * FROM users WHERE username = '$username' AND password = '{$password}' " );
confirm($query);

if(mysqli_num_rows($query)== 0){


set_message("Your username and/or password are incorrect.");
redirect("login.php");


} else {

set_message("Welcome {$username}!");
redirect("../admin");


}


}

?>



<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
			<div class="container">
				<div class="row align-items-md-center">
					<div class="col-md-5 pt-5">
                    <h2>Login</h2>
						<form action="#" class="consult-form py-5" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group mb-4">
			    					<label for="#">Userame</label>
			    					<input type="text" name="username" class="form-control" placeholder="Enter username" required>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
			    					<label for="#">Password</label>
			    					<input type="password" name="password" class="form-control" placeholder="Enter password" required>
			    				</div>
								</div>
						
							
								<div class="col-md-12">
									<div class="form-group mb-4">
			              <input name="submit" type="submit" value="Login" class="btn btn-primary py-1 px-4">
			             
                        </div>
								</div>
							</div>
                            <h4 class="subheading"><?php display_message();?></h4>
                            <div class="container" style="background-color:#f1f1f1">
                            <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
	    			</form>
					</div>
					
					</div>
				</div>
			</div>
		</section>
