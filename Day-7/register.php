<html>
<style>
	
		table
		{
			font-size:25px;
			
			border:2px solid;
		}
		</style>
<body>

	<table align="center">
	
	<form method = "post" style="margin-top:25px" action = "process.php" enctype="multipart/form-data">
	<tr>
			
				<th colspan = "2"> Registration Form </th>
			
			</tr>
	<tr>
	<td>Id:</td>
	<td><input type="number" name="id" required>
	</tr>
	
	<tr>
	<td>Name:</td>
	<td><input type="text" name="name" required></td>
	</tr>
	
	<tr>
	<td>Gender:</td>
	<td><input type="radio" name="gender" value="male" required>Male
	<input type="radio" name="gender" value="female" required>Female</td>
	</tr>
	
	<tr>
	<td>D.O.B:</td>
	<td><input type="date" name="dob" required></td>
	</tr>
	
	<tr>
	<td>Email:</td>
	<td><input type="email" name="mail" required></td>
	</tr>
	
	<tr>
	<td>Mobile No:</td>
	<td><input type = "tel" name = "num" minlength ="10" maxlength = "10" pattern="[0-9]{10}" required></td>
	</tr>
	
	<tr>
	<td>Address:</td>
	<td><textarea name = "add" rows = "3" cols = "20" required> </textarea></td>
	</tr>
	
	<tr>
		<td>
		City : </td> <td><select name = "city" required>				
				<option> Surat </option>
				<option> Baroda </option>
				<option> Mumbai </option>							
						   </select>	
		</td>
	</tr>
	
<tr>
	<td>Pincode:</td>
	<td><input type = "tel" name = "pin" minlength ="6" maxlength = "6" pattern="[0-9]{6}" required></td>
	</tr>
	
<tr>
		<td>				
			Password : </td> <td><input type = "password" name = "pass" minlength = "8" maxlength = "12" required>
		</td>
			
</tr>
		
		<tr>
			
				<td colspan="2">
					<center>
					<input type = "submit" name = "submit" value = "Submit">
				</center>
				</td>
			
			</tr>
			
	</form>
	</table>
</body>
</html>