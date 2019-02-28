<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Immigration<span><br>Services</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Practice Areas</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php 
							 $query = "SELECT * FROM services";
							 $select_services_query = mysqli_query($connection, $query);
           

while($row = mysqli_fetch_assoc($select_services_query)){
$service_id = $row['service_id'];
 $service_title = $row['service_title'];
 echo "<a class='dropdown-item' href='services.php?service={$service_id}'>{$service_title}</a>";

}

?>
        </div>
						</li>
						<li class="nav-item"><a href="changes.php" class="nav-link">Recent Changes</a></li>
	        	<li class="nav-item"><a href="posts.php" class="nav-link">Insights</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
