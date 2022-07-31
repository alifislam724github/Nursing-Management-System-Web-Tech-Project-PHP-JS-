<!DOCTYPE html>
<html>
	<head>
		<title>User Registration</title>

	</head>
	<body>
	<div style="background-color:#6b6bc7" ><td style="font-family:Poor Richard">
	<h1 align='center'>Nurse Registration Form</h1>
	                    
		
		</h5>               
        <form action="../control/control.php" method="post">
			<table  align='center'>
				<tr>
					<td>Full Name :</td>
					<td><input name="fname" type="text"> 
					
					</td>
				</tr>
				<tr>
					<td>Contact :</td>
					<td><input type="contact" name="contact"> 
					
					</td>
				</tr>
                <tr>
	                <td>Id :</td>
					<td><input type="text" name="nid">  
					
					</td>
				</tr>
				<tr>
	                <td>hospital name :</td>
					<td><input type="text" name="hname">  
					
					</td>
				</tr>
				<tr>
	                <td>hospital id :</td>
					<td><input type="" name="hid">  
					
					</td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="email" name="email"> 
					
					</td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password"> 
					
					</td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" id="male" name="gender" value="Male"> Male
						<input type="radio" id="female" name="gender" value="Female"> Female
						<input type="radio" id="other" name="gender" value="Other"> Other
						
						
					</td>
				</tr>
           
              
            	<br>
        		<tr>
        			<td align='center'><input type="submit" name="submit" value="Submit"><input type="reset" value="Reset"></td>
        		</tr>
				<tr>
					<td align='center'><br>
	                Already have an account?
					<a href="NurseLogin.php">
						Log-in
					</a>				
            	</tr>
			</table>
		</form>
	</body>
</html>


