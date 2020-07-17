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
<h1 style = " font-size : 40px;" >24/7 Life Care Hospital</h1>
</div>
<h3 style = "margin-top : -135px; margin-left : 40px; " align = "left"><a class = "alink" title = "Back to Homepage !" href = "index.php">Back</a></h3>
<h3 style = "margin-top : 72px; margin-right : 40px; " align = "right"><a class = "alink" title = "Clik here for Admin Login !" href = "login.php">Admin Login</a></h3>
<h3 style = "margin-top : -39px; margin-left : 40px; color : #C70039" align = "left">You are Welcome !</h3>
<h2 class = "addpatient" align = "center"  >Admin Request Form</h2>
<form action = "admin_request.php" method = "post" enctype = "multipart/form-data" >
	<table border = "1" width = "50%" align = "center" cellpadding = "6px" cellspacing = "0px" bgcolor = " #aeb2e5 " style = "margin-top : -20px;">
		<tr>
			<td align = "center" >Full Name</td> <td><input type = "text" name = "name" style = "width : 53%; " placeholder = "Full Name" required /></td>
		</tr>
		<tr>
			<td align = "center" >Father's Name</td> <td><input type = "text" name = "father" style = "width : 53%; " placeholder = "Father's Name" required /></td>
		</tr>
		<tr>
			<td align = "center" >Sex</td> <td> <input type="radio" name="sex" value="Male" required > Male <input type="radio" name="sex" value="Female" > Female </td>
		</tr>
		<tr>
			<td align = "center" >D.O.B.</td> <td><input type = "date" name = "dob" style = "width : 53%; " required /></td>
		</tr>
		<tr>
			<td align = "center" >Educational Qualification</td> <td><textarea rows="3" cols="30" name="qualification"  placeholder = "Write here..." required >
</textarea></td>
		</tr>
		<tr>
			<td align = "center" >Why you want to be Admin ?</td> <td><textarea rows="3" cols="30" name="reason"  placeholder = "Write here..." required >
</textarea></td>
		</tr>
		<tr>
			<td align = "center" >City</td> <td><input type = "text" name = "city" style = "width : 53%; " placeholder = "Residential City" required /></td>
		</tr>
		<tr>
			<td align = "center" >Contact</td> <td><input type = "text" name = "contact" style = "width : 53%; "  placeholder = "Phone Number" required /></td>
		</tr>
		<tr>
			<td align = "center" >Email</td> <td><input type = "email" name = "email" style = "width : 53%; "  placeholder = "xyz@example.com" required /></td>
		</tr>
		<tr>
			<td align = "center" >Image</td> <td><input type = "file" name = "image" /></td>
		</tr>
		<tr>
			<td colspan = "2"><input style = "margin-left : 225px;" type = "reset" name = "reset" value = "Reset" /><input style = "margin-left : 5px;" type = "submit" name = "submit" value = "Submit" /></td>
		</tr>
		
	</table>
	</form>
	
</body>
</html>


<?php
	
	if(isset($_POST['submit']))
	{
		include('dbcon.php');
		if($con == False)
		{
			echo "Not connect";
		}
		
		$name = $_POST['name'];    
        $father = $_POST['father']; 			 $contact = $_POST['contact'];
		$sex = $_POST['sex'];		
		$dob = $_POST['dob']; 
		$reason = $_POST['reason'];   
		$qualification = $_POST['qualification'];  
		$city = $_POST['city'];
		$email = $_POST['email'];
		
		$imagename = $_FILES['image']['name'];
		$tempname = $_FILES['image']['tmp_name'];
		
		move_uploaded_file($tempname, "dataimg/$imagename");
		
		$qry = "INSERT INTO `admin_request`(`name`, `father`, `sex`, `dob`, `edu_qulification`, `reason`, `city`, `contact`, `email`, `image`)
				VALUES ('$name', '$father', '$sex', '$dob', '$qualification', '$reason', '$city', '$contact', '$email', '$imagename')";
		
		$run = mysqli_query($con, $qry);
		if($run == True)
		{
			?>
			<script>
				alert("Data Inserted Successfully !");
			</script>
			<?php
		}
		
	}
?>

