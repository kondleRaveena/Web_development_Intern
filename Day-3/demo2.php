<html>
<body>
<h2>Registration Form</h2>
	<table>
	<form action="process2.php" method="post">
	<tr>
	<td>NAME:</td>
	<td><input type="text" name="name"></td>
	</tr>
	
	<tr>
	<td>AGE:</td>
	<td><input type="number" max="100" min="1" name="age"></td>
	</tr>
	
	<tr>
	<td>D.O.B:</td>
	<td><input type="date" name="dob"></td>
	</tr>
	
	<tr>
	<td>Gender:</td>
	<td><input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female </td>
	</tr>
	
	<tr>
	<td><input type="submit" name="submit" value="SUBMIT"></td>
	<td><input type="reset" name="reset" value="RESET"></td>
	</tr>
	
	</form>
	</table>
</body>
</html>