<!DOCTYPE html>
<html>
<body>
<div style="background-color:#c79c87;">

	<h1 align='center'>Nurse Information</h1>	                    
		<form action="../control/s.php" method="post">
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
					<td><input type="id" name="id">  
				
					</td>
				</tr>
				<tr>
	                <td>Set Schedule :</td>
					<td><input type="time" name="set_schedule">  
				
					 TO
					<input type="time" name="set_schedule">  
				
					</td>
				</tr>
				<tr>
	                <td>Patient_serial :</td>
					<td><input type="serial" name="serial">  
					
					</td>
				</tr>
				<tr>
				<td ><input type="submit" value="Submit"></td>
				</tr>

<td ><h2 >Patient data info  :</h2></td>
<td ><a style="text-decoration:none;" href="details.json"><h2 >Patientdetails</a></h2><br>                  
</table>
</form>
<h2><a style="text-decoration:none;" href="logout.php"><h4 align='center' >Log-Out</a></h2>
</body>
</html>