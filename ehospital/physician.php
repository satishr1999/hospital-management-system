<html>
<head>
<title>Hospital Management System</title>
<style>

.alink
{
	text-decoration : none;
	color :  #C70039;
}
.alink:hover
{
	text-decoration : underline;
}
.index
{
	background-color : #7a84f9;
	color : #8c5c2f;
	margin-left : 10px;
	margin-right : 10px;
	margin-top : -14px;
	height : 150px;
	line-height : 150px;
}
.addpatient
{
	background-color :  #666dc6 ;
	color : white;
	margin-left : 100px;
	margin-right : 100px;
	margin-top : 30px;
	height : 70px;
	line-height : 70px;
}
</style>
</head>
<body style = " background-color: #29506a; ">
<div class = "index" align = "center" >
<h1 style = " font-size : 40px;" >24/7 Life Care Hospital</h1>
</div>
<h3 style = "margin-top : -135px; margin-left : 40px; " align = "left"><a class = "alink" title = "Back to Homepage !" href = "index.php">Back</a></h3>
<h3 style = "margin-top : 72px; margin-right : 40px; " align = "right"><a class = "alink" title = "Clik here for Admin Login !" href = "login.php">Admin Login</a></h3>
<h3 style = "margin-top : -39px; margin-left : 40px; color : #C70039" align = "left">You are Welcome !</h3>
<h2 class = "addpatient" align = "center" style = "font-family : courier; " >Our Physicians</h2>
<table align = "center" width = "80%" border = "1" cellpadding = "5px" cellspacing = "0px" >
		<tr style = "background-color : #7a84f9; color : white;" >
			<th>No</th>
			<th>Image</th>
			<th>Name</th>
			<th>Specialization</th>
			<th>Emergency Contact</th>
		</tr>
		<?php
			include('dbcon.php');
			$qry = "SELECT * FROM `physician`";
			$run = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($run) < 1)
		{
			echo "<tr align = 'center' ><td colspan = '5' >No Records !</td></tr>";
		}
		else
		{
			$count = 0;
			while($data = mysqli_fetch_assoc($run))
			{
				$count++;
				?>
					<tr align = "center"  style = "background-color :  #88b3f1 ;" >
						<td><?php echo "$count"; ?></td>
						<td><img src = "dataimg/<?php echo $data['image']; ?>" style = "width : 50px; height : 60px; " /></td>
						<td><?php echo $data['name']; ?></td>
						<td><?php echo $data['specialization']; ?></td>
						<td><?php echo $data['contact']; ?></td>
					</tr>
				
				<?php
			}
		}
		?>
	
	</table>
</body>
</html>


