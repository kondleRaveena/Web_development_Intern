<?php
$conn=mysqli_connect("localhost","root","","internship");
$id=$_GET['deletedid'];
$qry=mysqli_query($conn,"delete from student where id='{$id}'") or die(mysqli_error($conn));
if($qry)
{
	
	echo"<script>alert('Data deleted..');
	window.location='register_display.php';</script>";
}
?>