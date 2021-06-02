<?php
$conn=mysqli_connect("localhost","root","","internship");
$query=mysqli_query($conn,"select * from student") or die(mysqli_error($conn));
echo"<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>Name</th>";
echo"<th>Gender</th>";
echo"<th>D.O.B</th>";
echo"<th>Email</th>";
echo"<th>Mobile-No</th>";
echo"<th>Address</th>";
echo"<th>City</th>";
echo"<th>Pincode</th>";
echo"<th>Password</th>";
echo"<th>Action</th>";
echo"</tr>";

while($row=mysqli_fetch_array($query))
{
	echo"<tr>";
	echo"<td>{$row['id']}</td>";	
	echo"<td>{$row['name']}</td>";	
	echo"<td>{$row['gender']}</td>";	
	echo"<td>{$row['dob']}</td>";
	echo"<td>{$row['mail']}</td>";	
	echo"<td>{$row['mobile_no']}</td>";	
	echo"<td>{$row['address']}</td>";
	echo"<td>{$row['city']}</td>";
	echo"<td>{$row['pincode']}</td>";
	echo"<td>{$row['password']}</td>";
	echo"<td><a href='register_delete.php?deletedid={$row['id']}'>Delete</a></td>";	
	echo"</tr>";
}
echo"</table>";
echo"<a href='register.php'>Add Record</a>";


?>