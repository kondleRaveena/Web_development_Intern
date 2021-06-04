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
            name:<input type="text" name="txt1"value="<?php echo $result['name'];?>"/><br/><br/>
            gender:
            <select name="txt2">
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
            mobile:
            <input type="number" name="txt3"value="<?php echo $result['mobile_no'];?>"/><br/><br/>
			<input type= "hidden" name="editid" value =" <?php  echo $result['id'];?>">
            <input type="submit" name="submit" value="Submit"/>
			
        </form>
    </body>
</html>
<?php
if(isset($_POST['editid']))
	{
			
			$e_id=$_POST['editid'];
			$name=$_POST['txt1'];
			$gender=$_POST['txt2'];
			$num=$_POST['txt3'];
			
			mysqli_query($conn,"update student set name='$name',mobile_no='$num',gender='$gender'
			where id='$e_id'")or die("error ".mysqli_error($conn));
		
			header("location:display.php");
			}
		
	
		?>