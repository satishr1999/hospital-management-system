<?php
	session_start();
	if(isset($_SESSION['rollno']))
	{
		header('location:admindash.php');
	}
?>
<html>
<head>
<title>Hospital Management System</title>
<style>
.rpass1
{
	width : 50.2%;
	height : 42%;
	margin-left : 320px;
	margin-top : -20px;
	background-color : #aeb2e5;
}
.rpass2
{
	margin-right : 15px;
}

.login
{
	background-color : #7a84f9;
	color : #8c5c2f ;
	margin-left : 10px;
	margin-right : 10px;
	margin-top : -14px;
	height : 150px;
	line-height : 150px;
}
.alogin
{
	background-color : #c7bdc8 ;
	color :  #b6f5f8;
	margin-left : 200px;
	margin-right : 200px;
	margin-top : 30px;
	height : 50px;
	line-height : 50px;
}


.alink
{
	text-decoration : none;
	color : #C70039 ;
}

.upform
{
	text-decoration : none;
}

.upform:hover, .upform:active
{
    text-decoration : underline;
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
<body style = " background-color : #29506a; " >
	<div class = "login" align = "center" >
	<h1 style = " font-size : 40px;" >Life Care e-HOSPITAL</h1>
	</div>
	<h3 style = "margin-top : -140px; margin-left : 40px; " align = "left"><a class = "alink" title = "Back to Admin Login !" href = "../login.php">Back</a></h3>	
	<h3 style = "margin-top : 80px; margin-right : 40px; " align = "right"><a class = "alink" title = "Clik here for Home !" href = "../index.php">Home</a></h3>
	<h3 style = "margin-top : -40px; margin-left : 40px; color : #C70039" align = "left">You are Welcome !</h3>
	<h2 class = "addpatient" align = "center" style = "font-family : courier; " >Retrieve Your Password</h2>
	
	<div class = "rpass1" >
	<form action = "fpassword.php" method = "post" >
	<div class = "rpass2" >
	<table align = "center" cellpadding = "8px" cellspacing = "1px">
		<br /><br />
		<tr>
			<td>Username</td><td><input type = "text" name = "uname" style = " width : 100%; " required = "required" /></td>
		</tr>
		<tr>
			<td>Your Security Question</td>
			<td><select name = "question" style = "width : 100%;" required >
				<option value = "">---Please Select---</option>
				<option value = "My favorite high school teacher ?">My favorite high school teacher ?</option>
				<option value = "My favorite sport game ?">My favorite sport game ?</option>
				<option value = "My favorite animal ?">My favorite animal ?</option>
				<option value = "My best friend ?">My best friend ?</option>
				<option value = "Where was you born ?">Where was you born ?</option>
				<option value = "My favorite car ?">My favorite car ?</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Your Answer</td><td><input type = "password" name = "qans" style = " width : 100%; " required = "required" /></td>
		</tr>
		<tr colspan = "2">
			<td colspan = "2" align = "center" ><input type = "submit" name = "submit" value = "Submit" /></td>
		</tr>
		<tr >
			<td><p align = "right" style = " margin-right : -280px; margin-top : -5px; " ><a class = "upform" href = "f_s_question.php" >Forgot Security Question ?</a></p>
			</td>
		</tr>
	</table>
	</div>
	</form>
	</div>
</body>
</html>

<?php
	include('../dbcon.php');
	
	if(isset($_POST['submit']))
	{	
		$username = $_POST['uname'];
		$question = $_POST['question'];
		$qusans = $_POST['qans'];
			
		$qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `qans` = '$qusans' AND `question` = '$question'";
		
		$run = mysqli_query($con, $qry);
		$row = mysqli_num_rows($run);
		
		if($row < 1)
		{
			?>
			<script>
				alert("Username or Security Question or Answer is incorrect !!!");
				window.open('fpassword.php', '_self');
			</script>
			<?php
		}
		else
		{
			$data = mysqli_fetch_assoc($run);
			$rno = $data['rollno'];
			$name = $data['fname'];
			$_SESSION['rollno'] = $rno;
			$_SESSION['name'] = $name;
			
			header('location:resetpass.php');
		}	
	}
?>

