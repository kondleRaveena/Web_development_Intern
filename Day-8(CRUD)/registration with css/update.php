<?php
$connection=mysql_connect("localhost","root","");
mysql_select_db("internship");

	if(isset($_GET['editid'])&& $_GET['editid']!="")
	{
			$id=$_GET['editid'];
			$query=mysql_query("select * from student where id='$id'");
    
			$result=mysql_fetch_array($query);
			
	


	}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update </h2>
                    <form method="POST">
					
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $result['name'];?>" name="name"required>
                        </div>
						
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
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
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" value="<?php echo $result['dob'];?>" name="dob"required>
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-3" type="email"value="<?php echo $result['mail'];?>"name="mail"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text"value="<?php echo $result['mobile_no'];?>"name="num"required>
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $result['address'];?>" name="add"required>
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $result['city'];?>" name="city"required>
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $result['pincode'];?>" name="pin"required>
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $result['password'];?>" name="pass"required>
                        </div>
						<input type= "hidden" name="editid" value =" <?php  echo $result['id'];?>">
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
							<a href="display.php">Display Records</a>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
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
			
			
			mysql_query("update student set name='$name',gender='$gender',dob='$dob',mail='$mail',mobile_no='$num',address='$address',city='$city',pincode='$pincode',password='$password'
			where id='$e_id'");
		
			header("location:display.php");
			}
		
	
		?>

