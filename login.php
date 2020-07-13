<?php
session_start();

$message = "";
$logged_in = False;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (isset($_POST["login"])){
          class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('database.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      $message = $db->lastErrorMsg();
   }

   $sql ='SELECT * from USERS where USERNAME="'.$_POST["usr_name"].'";';

	
   $ret = $db->query($sql);
   $id = "";

   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $id=$row['ID'];
      $username=$row["USERNAME"];
      $password=$row['PASSWORD'];
	  }
	if ($id!=""){
		if ($password==$_POST["pwd"]){
		   $_SESSION["username"]=$username;
		   $_SESSION['loggedin'] = true;
		   header('Location: content.php');    
		   
		}else{
		  
		  $message = "Wrong Password";
		}
	  }else{
	   $message =  "User not exist, please register to continue!";
	  }
   $db->close();
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/sha1.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form role="form" method="post" action="login.php" onsubmit="login_validation()">
	<input type="text" class="form-control" id="login" name="login" value="true">
    <div class="form-group">
      <label for="usr_name">Username:</label>
      <input type="text" class="form-control" id="usr_name" name="usr_name" placeholder="Enter Username" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
