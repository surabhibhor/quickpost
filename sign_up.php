<?php 
include('sign_updetail.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<body>
 <form  method="post" action="sign_updetail.php">
            <div class="input-group">
                <p class="fa fa-user-o">   First Name</p>
                <input type="text" name="first_name" placeholder="First Name">
            </div>  
            <div class="input-group">          
                    <p class="fa fa-user-o">   Last Name</p>
                    <input type="text" name="last_name" placeholder="Last Name">
            </div>
            <div class="input-group">
                <p class="fa fa-user-o">  User Name</p>
                <input type="text" name="user_name" placeholder="User name">
            </div>

            <div class="input-group">
			    <p class="fa fa-envelope-open-o"> Email</p>
                <input type="email" name="user_mail_id" placeholder="Email Id">
            </div>

            <div class="input-group">
                <p class="fa fa-key"> Password</p>
                <input type="password" name="password" placeholder="password" id="pass" >
            </div>
            <div class="input-group">
			    <p class="fa fa-thumbs-o-up">  Confirm Password</p>
                <input type="password" name="confirm_pass" placeholder="Password" id="cnfirm_pass">
            </div>
            
            <div class="input-group">
                <input  type="checkbox" required>I agree with all terms and condition.
            </div> 
            

            <div class="input-group">
                <input  type="submit" name="submit" value="Submit" onclick="myval()">
            </div>
</div>
<script>
    function myval()
    {
            var a = document.getElementById("pass").value;
            var b = document.getElementById("cnfirm_pass").value;
            if (a!=b)
            {
               alert("Passwords do no match");
               return false;
            }
    }
     </script>       
		</form>
</body>
</html>