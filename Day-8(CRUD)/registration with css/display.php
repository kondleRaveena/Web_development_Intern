<?php

	$conn=mysqli_connect("localhost","root","","internship");

	session_start();
?>
	
	<html>
	
		<head>
			<title>display</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<style>
			
			#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
  .btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 10px;
  font-size: 16px;
  cursor: pointer;
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: #32CD32;
}
</style>
		</head>
		
		<body>
		<h1 align="center">DETAILS</h1>
		
		<center><a href="index.php"><button class="btn"><i class="fa fa-plus"></i>   ADD NEW USER</button></a></center>
		<div>
		<h1></h1>
		<table id="customers" align="center">
		
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>Gender</th>
				<th>D.O.B</th>
				<th>Email</th>
				<th>Mobile-No</th>
				<th>Address</th>
				<th>City</th>
				<th>Pincode</th>
				<th>Password</th>
				<th>ACTION</th>
			</tr>
			<?php
			
				$qry=mysqli_query($conn,"select * from student") or die(mysqli_error($conn));
				
				while($result=mysqli_fetch_array($qry))
				{	
			?>
			
			<tr>
			
							
					
						
					<td> <?php echo $result['id']; ?> </td>
					<td> <?php echo $result['name']; ?> </td>
					<td><?php echo $result['gender']; ?></td>
					<td><?php echo $result['dob']; ?></td>
					<td><?php echo $result['mail']; ?></td>
					<td><?php echo $result['mobile_no']; ?></td>
					<td><?php echo $result['address']; ?></td>
					<td><?php echo $result['city']; ?></td>
					<td><?php echo $result['pincode']; ?></td>
					<td><?php echo $result['password']; ?></td>
					
					
					
					<td><a href="update.php?editid=<?php echo $result['id']?>"><button class="btn"><i class="fa fa-edit"></i>     UPDATE</button></a>&nbsp;&nbsp;<a href="delete.php?deleteid=<?php echo $result['id']?>"onclick="return confirm('Surely delete <?php echo $result['name']?> Employee');"><button class="btn"><i class="fa fa-trash"></i>     DELETE</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
						
			</tr>
			<?php 
				}	
			 ?>
		</table>
</div>
		<!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
		</body>
	</html>							