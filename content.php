<?php
	session_start();
	if(!isset($_SESSION["username"]) || !isset($_SESSION["loggedin"])){
		header('Location: /');   			
	}

	if(isset($_SESSION["loggedin"])){
		if($_SESSION["loggedin"] != true) {
			header('Location: /');   	
		}	
	}
?>


CONTENT
<a href="logout.php"><button type="button" href="logout.php" class="btn btn-primary active">Log Out</button></a>
