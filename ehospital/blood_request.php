<html>
<head>
<title>Hospital Management System</title>
<style>
.index
{
	background-color : #C73010;
	color : white;
	margin-left : 10px;
	margin-right : 10px;
	margin-top : -14px;
	height : 150px;
	line-height : 150px;
}
.alink
{
	text-decoration : none;
	color : white;
}
.alink:hover
{
	text-decoration : underline;
}
.b
{
	text-decoration : none;
	color : orange;
}
.b:hover
{
	text-decoration : underline;
}
.addpatient
{
	background-color :orange;
	color : white;
	margin-left : 320px;
	margin-right : 320px;
	margin-top : 30px;
	height : 70px;
	line-height : 70px;
}
</style>
</head>
<body background="images/blood_bg.jpg">
<div class = "index" align = "center" >
<h1 style = " font-size : 40px;" >24/7 Life Care Hospital</h1>
</div>
<h3 style = "margin-top : -135px; margin-left : 40px; " align = "left"><a class = "alink" title = "Back to Homepage !" href = "blood_bank1.php">Back</a></h3>
<h3 style = "margin-top : 72px; margin-right : 40px; " align = "right"><a class = "alink" title = "Clik here for Admin Login !" href = "login.php">Admin Login</a></h3>
<h3 style = "margin-top : -39px; margin-left : 40px; color : white" align = "left">You are Welcome !</h3>
<h2 class = "addpatient" align = "center"  >Blood Donation Form</h2>
<form action = "blood_request.php" method = "post" enctype = "multipart/form-data" >
	<table border = "1" width = "50%" align = "center" cellpadding = "6px" cellspacing = "0px" bgcolor = "skyblue" style = "margin-top : -20px;">
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
			<td align = "center" >Marital Status</td> <td><input type="radio" name="mstatus" value="Married" required > Married <input type="radio" name="mstatus" value="Single" > Single <input type="radio" name="mstatus" value="Divorced" > Divorced <input type="radio" name="mstatus" value="Widow" > Widow </td>
			
		</tr>
		<tr>
			<td align = "center" >Blood Group</td> 
			<td><select name = "bgroup" style = "width : 53%;" required >
				<option value="">---Please Select---</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
			    </select></td>
		</tr>
		<tr>
			<td align = "center" >Age</td> <td><input type = "number" name = "age" style = "width : 53%; " placeholder = "Age >= 18 Yr." required /></td>
		</tr>
		<tr>
			<td align = "center" >Address</td> <td><input type = "text" name = "address" style = "width : 53%; " placeholder = "Residential Address" required /></td>
		</tr>
		<tr>
			<td align = "center" >Contact</td> <td><input type = "text" name = "contact" style = "width : 53%; "  placeholder = "Phone Number" required /></td>
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
        $father = $_POST['father']; 			 
		$sex = $_POST['sex'];
		$contact = $_POST['contact'];
		$age = $_POST['age'];    
		$address = $_POST['address'];  
		$mstatus = $_POST['mstatus'];
		$bgroup = $_POST['bgroup'];
		
		$qry = "INSERT INTO `blood_request`(`name`, `father`, `sex`, `mstatus`, `bgroup`, `age`, `address`, `contact`)
				VALUES ('$name', '$father', '$sex', '$mstatus', '$bgroup', '$age', '$address', '$contact')";
		
		$run = mysqli_query($con, $qry);
		if($run == True)
		{
			?>
			<script>
				alert("Data Inserted Successfully !");
				window.open('blood_bank1.php', '_self');
			</script>
			<?php
		}
		
	}
?>

