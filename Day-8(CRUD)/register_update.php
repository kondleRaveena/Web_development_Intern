
<?php
$conn=mysqli_connect("localhost","root","","internship");
?>
<html>
<head>
<title>update</title>		
</head>
<?php
	if(isset($_GET['editid'])&& $_GET['editid']!="")
	{
			$id=$_GET['editid'];
			$query=mysqli_query($conn,"select * from student where id='$id'")  or die("error ".mysqli_error($conn));
    
			$result=mysqli_fetch_array($query);
			
	


	}
?>
<html>
	 <body>
        <form method="POST">
            Name:<input type="text" name="name"value="<?php echo $result['name'];?>"/><br/><br/>
            Gender:
            <select name="gender">
                <option value="Female"
				<?php 
				if($result['gender']=='Female')
				{
					echo"selected";
				}?>>Female</option>
                <option value="Male"<?php 
				if($result['gender']=='Male')
				{
					echo"selected";
				}?>>Male</option>
            </select><br/><br/>
			D.O.B:<input type="date" name="dob"value="<?php echo $result['dob'];?>"/><br/><br/>
			Email:<input type="mail" name="mail"value="<?php echo $result['mail'];?>"/><br/><br/>
            Mobile:
            <input type="number" name="num"value="<?php echo $result['mobile_no'];?>"/><br/><br/>
			Address:<input type="text" name="address"value="<?php echo $result['address'];?>"/><br/><br/>
			City:
            <select name="city">
                <option value="Surat"
				<?php 
				if($result['city']=='Surat')
				{
					echo"selected";
				}?>>Surat</option>
                <option value="Baroda"<?php 
				if($result['city']=='Baroda')
				{
					echo"selected";
				}?>>Baroda</option>
				<option value="Mumbai"<?php 
				if($result['city']=='Mumbai')
				{
					echo"selected";
				}?>>Mumbai</option>
            </select><br/><br/>
			Pincode:<input type="number" name="pincode"value="<?php echo $result['pincode'];?>"/><br/><br/>
			Password:<input type="text" name="password"value="<?php echo $result['password'];?>"/><br/><br/>
			<input type= "hidden" name="editid" value =" <?php  echo $result['id'];?>">
            <input type="submit" name="submit" value="Submit"/>
			
        </form>
    </body>
</html>
<?php
if(isset($_POST['editid']))
	{
			
			$e_id=$_POST['editid'];
			$name=$_POST['name'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$mail=$_POST['mail'];
			$num=$_POST['num'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$pincode=$_POST['pincode'];
			$password=$_POST['password'];
			
			
			mysqli_query($conn,"update student set name='$name',gender='$gender',dob='$dob',mail='$mail',mobile_no='$num',address='$address',city='$city',pincode='$pincode',password='$password'
			where id='$e_id'")or die("error ".mysqli_error($conn));
		
			header("location:register_display.php");
			}
		
	
		?>
