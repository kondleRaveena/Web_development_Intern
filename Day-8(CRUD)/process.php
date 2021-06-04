<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$connection=mysql_connect("localhost","root","");
mysql_select_db("internship");

	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$mail=$_POST['mail'];
	$num=$_POST['num'];
	$add=$_POST['add'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
	$pass=$_POST['pass'];
	
	mysql_query("insert into student(id,name,gender,dob,mail,mobile_no,address,city,pincode,password)values('$id','$name','$gender','$dob','$mail','$num','$add','$city','$pin','$pass')"); 

	echo mysql_error();
	header("location:register_display.php");


?>