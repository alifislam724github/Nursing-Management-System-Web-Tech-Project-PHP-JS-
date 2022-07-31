<?php
	session_start();

	
    	$data = file_get_contents('../model/Nurse.json');
        $data_array = json_decode($data, true);
        
    
        if (isset($_POST['submit'])) {
        	$email=$_POST['email'];
        	$pass=$_POST['password'];
        	foreach ($data_array as $key => $value) {
        		if($value['email']==$email)
        		{
        			if($value['password']==$pass)
        			{
	    				 $_SESSION['username']=$value['name'];
	    				 setcookie('username', $value['name'], time() + (86400 * 5), "/");
	               		 header("Location:../view/NurseDetails.php"); 
        			}
        		}
        	}
        	
        }
    
?>
<!DOCTYPE html>
<html>
	<head>
		<title>User-Login</title>	
	</head>
	<body>
	<div style=" background-color:#b0d8eb;">
	<h1 align='center'>Login Form</h1>	                    
		<form action="" method="post">
			<table  align='center'>	
			<tr>
			<td>Email :</td>
			<td><input type="email" name="email"> *email entry is must </td>
			</tr>
			<tr>
			<td>Password :</td>
			<td><input type="password" name="password"> *password entry is must </td>
			</tr>					
			<tr>
			<tr>
			<tr><td align='center'><br><input type="submit" name="submit" value="Login"></td></tr>
        
            <tr><td align='center'><br>
			Don't have an account yet?
				<a href="registration.php">
					Create an account
				</a> </td>								
        	</tr>			
			<tr><td align='center'><br>
			Back To HomePage
				<a href="Home.php">
					HomePage
				</a>								
        	</tr>
		</form>
	</body>
</html>