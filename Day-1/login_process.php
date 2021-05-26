<?php
session_start();
$email=$_POST['email'];
$p1=$_POST['password'];

if($email=="raveena@gmail.com" and $p1=="123")
{
	$_SESSION['uid']=$email;
	?>
	<input type="" onclick="return confirm('Login Successfully');">
	<?php
	header("Location:index.php");
}
else
{
	echo "wrong password or username";
}
?>

