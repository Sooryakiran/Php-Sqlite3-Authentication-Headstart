<?php
	session_start();
	if(isset($_SESSION["username"]) && isset($_SESSION["loggedin"])){
		if($_SESSION["loggedin"] == true){
			header('Location: content.php');   		
		}	
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log In/Sign Up Form Example in PHP and SQLITE Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Log In/Sign Up Form Example in PHP and SQLITE Database</h2>
  <a href="registration.php"><button type="button" href="register.php" class="btn btn-primary">Sign Up</button></a>
  <a href="login.php"><button type="button" href="login.php" class="btn btn-primary active">Log in</button></a>
  <a href="logout.php"><button type="button" href="logout.php" class="btn btn-primary active">Log Out</button></a>
</div>

</body>
</html>
