<?php 
include ('register.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>registration</title>
</head>
<body>
<div class="container">
	<div class="heading">
		<h2 >Register Now</h2>
	</div>
<div class="form">

	<form action="register.php" method="post">

		<label>Username</label>
			<input type="text" name="name">

			<label>Gmail</label>
			<input type="gmail" name="gmail">

			<label>Password</label>
			<input type="password" name="password" id="password">

			<label>Confirm password</label>
			<input type="password" name="confirm" id ="confirm"><br><br>

			<input type="submit" name="submit" value="register" onclick="validate()">

		</form>
	</div>
</div>
	<script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm").value;
            if (a!=b){
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
</body>
</html>


		
		