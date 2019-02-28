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

if (isset($_POST['register_btn'])) {
	register();
}
// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: index.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: ../admin');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE user_id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}



?>



<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
			<div class="container">
				<div class="row align-items-md-center">
					<div class="col-md-5 pt-5">
                    <h2>Signup</h2>
						<form action="register.php" class="consult-form py-5" method="post" enctype="multipart/form-data">

                            <div class="row">
								<div class="col-md-6">
									<div class="form-group mb-4">
			    					<label for="#">Userame</label>
			    					<input type="text" name="username" class="form-control" placeholder="Enter username" value="" required>
			    				</div>
								</div>
                                <div class="col-md-6">
									<div class="form-group mb-4">
			    					<label for="#">Email</label>
			    					<input type="text" name="email" class="form-control" placeholder="Enter email" value="" required>
			    				</div>
								
								</div>
                                <div class="row">
                                <div class="col-md-6">
									<div class="form-group mb-4">
			    					<label for="#">Password</label>
			    					<input type="text" name="password_1" class="form-control" placeholder="Enter password" required>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
			    					<label for="#">Confirm Password</label>
			    					<input type="text" name="password_2" class="form-control" placeholder="Confirm password" required>
			    				</div>
								</div>
							
								<div class="col-md-12">
									<div class="form-group mb-4">
			              <input name="register_btn" type="submit" value="Register" class="btn btn-primary py-3 px-4">
                        </div>
								</div>
							</div>
	    			</form>
					</div>
					
					</div>
				</div>
			</div>
		</section>