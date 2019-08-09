<?php 

    //start session
    session_start();

    
    $db=mysqli_connect('localhost','root','','ritu');

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db->connect_error);
    }
    else{
        echo"connected";
    }
   
    ///insert data into table
    if(isset($_POST['submit'])&&($_POST['password']===$_POST['confirm_pass'])){
         //varible initialization
        $user_name=$_POST['user_name'];
        $user_mail_id=$_POST['user_mail_id'];
        $confirm_pass=$_POST['confirm_pass'];
        $hash_pass = password_hash($confirm_pass,PASSWORD_DEFAULT);//encrypt the password before saving in the database
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        

        //echo"DONE";
        $query="INSERT INTO kapoor(user_name,user_mail_id,confirm_pass,first_name,last_name) VALUES('$user_name','$user_mail_id','$hash_pass','$first_name','$last_name')";
        mysqli_query($db,$query);
        //$_SESSION['msg']="Done sucessfully";
        header('location:sign_in.php');//rediect to index page after insertion

    }
    if(isset($_POST['submit'])&&($_POST['password']!=$_POST['confirm_pass']))
    {
        header('location:sign_up.php');
    }
?>