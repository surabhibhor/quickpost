<?php

include('connection.php');

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
die("connection failed".$conn);
}





if(isset($_POST['submit'])&&($_POST['password']===$_POST['confirm'])){

	$username= $_POST['name'];
	$gmail=$_POST['gmail'];
	$confirm = $_POST['confirm'];
	$hash_pass =password_hash($confirm,PASSWORD_DEFAULT);

	$upload = "INSERT INTO kapoor(username,mail,confirmpass) VALUES( '$username','$gmail','$hash_pass')";
	mysqli_query($conn,$upload);

	header('location:login.php');



if(isset($_POST['submit']) &&($_POST['password']!=$_POST['confirm'])){

	header('location:register_you.php');
}
}



?>