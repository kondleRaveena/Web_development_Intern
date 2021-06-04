<?php
$conn=mysqli_connect("localhost","root","","internship");
$id=$_GET['deleteid'];
$qry=mysqli_query($conn,"delete from student where id='{$id}'") or die(mysqli_error($conn));
if($qry)
{
	header("location:display.php");
}
?>