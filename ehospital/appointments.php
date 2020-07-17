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
	margin-left : 320px;
	margin-right : 320px;
	margin-top : 30px;
	height : 70px;
	line-height : 70px;
}
</style>
</head>
<body style = " background-color: #29506a; ">
<div class = "index" align = "center" >
<h1 style = " font-size : 40px;" >24/7 Life Care HOSPITAL</h1>
</div>
<h3 style = "margin-top : -135px; margin-left : 40px; " align = "left"><a class = "alink" title = "Back to Homepage !" href = "index.php">Back</a></h3>
<h3 style = "margin-top : 70px; margin-right : 40px; " align = "right"><a class = "alink" title = "Clik here for Admin Login !" href = "login.php">Admin Login</a></h3>
<h3 style = "margin-top : -39px; margin-left : 40px; color : #C70039" align = "left">You are Welcome !</h3>
<br />
	<h2 class = "addpatient" align = "center" style = "font-family : courier; " >Appointment Form</h2>
	<form action = "appointments.php" method = "post" >
	<table border = "1" width = "50%" align = "center" cellpadding = "6px" cellspacing = "0px" bgcolor = " #aeb2e5 " style = "margin-top : -20px;">
		<tr>
			<td align = "center" >Name</td> <td><input type = "text" name = "name" placeholder = "Patient's Full Name" required /></td>
		</tr>
		<tr>
			<td align = "center" >Father's Name</td> <td><input type = "text" name = "father" placeholder = "Father's Name" required  /></td>
		</tr>
		<tr>
			<td align = "center" >Sex</td> <td> <input type="radio" name="sex" value="Male" required > Male <input type="radio" name="sex" value="Female" > Female </td>
		</tr>
		<tr>
			<td align = "center" >Age</td> <td><input type = "number" name = "age" style = "width : 53%; " placeholder = "Patient's Age"  required /></td>
		</tr>
		<tr>
			<td align = "center" >Consultant</td> 
			<td><select name = "consultant" style = "width : 53%;" required >
			<option value="">---Please Select---</option>
			<?php 
					$query = "SELECT `name` FROM `physician` WHERE 1";
					$query_run = mysqli_query($con, $query);
					while($a = mysqli_fetch_assoc($query_run))
					{	
						?>
						<option value="<?php echo $a['name']; ?>"><?php echo $a['name']; ?></option>
						<?php
					}
					?>
			</select></td>
		</tr>
		
		<tr>
			<td align = "center" >Date</td> <td><input type = "text" name = "date" required /></td>
		</tr>
		<tr>
			<td align = "center" >Time</td> <td><input type = "text" name = "time" style = "width : 53%; "  required /></td>
		</tr>
		<tr>
			<td align = "center" >City</td> <td><input type = "text" name = "city" placeholder = "Residential City" required /></td>
		</tr>
		<tr>
			<td align = "center" >Contact</td> <td><input type = "text" name = "contact" placeholder = "Phone Number" required /></td>
		</tr>
		<tr>
			<td colspan = "2"><input style = "margin-left : 225px;" type = "reset" name = "reset" value = "Reset" /><input style = "margin-left : 5px;" type = "submit" name = "submit" value = "Submit" /></td>
		</tr>
	</table>
	</form>
	<h3 style = "margin-top : -665px; margin-left : 40px; " align = "left"><a class = "alink" title = "Back to Homepage !" href = "index.php">Back</a></h3>
	</body>
</html>

<?php

	if(isset($_POST['submit']))
	{
		include('dbcon.php');
		
		$name = $_POST['name'];   
		$father = $_POST['father'];		
		$age = $_POST['age'];		 
		$contact = $_POST['contact'];
		$sex = $_POST['sex'];		 
		$date = $_POST['date'];	
		$time = $_POST['time'];
		$consultant = $_POST['consultant'];
		$city = $_POST['city'];
		
		$qry = "INSERT INTO `appointment`(`name`, `father`, `sex`, `age`, `date`, `time`, `consultant`, `city`, `contact`) VALUES ('$name', '$father', '$sex', '$age', '$date', '$time', '$consultant', '$city', '$contact')";
		
		$run = mysqli_query($con, $qry);
		if($run == True)
		{
			?>
			<script>
				alert("Data Inserted Successfully !");
				window.open('index.php', '_self');
			</script>
			<?php
		}
		
	}


?>

