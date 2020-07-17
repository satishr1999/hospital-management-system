<?php
	
	session_start();
	if(isset($_SESSION['rollno']))
	{
		echo "";
	}
	else
	{
		header('location:../login.php');
		session_destroy();
	}
?>
<html>
<head>
<title>Hospital Management System</title>
<style>
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
.rpass1
{
	width : 50.2%;
	height : 35%;
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

</style>
</head>
<body style = " background-color : #29506a; " >
	<div class = "login" align = "center" >
	<h1 style = " font-size : 40px;" >Life Care e-HOSPITAL</h1>
	</div>
	<h3 style = "margin-top : -38px; margin-left : 40px; color : #64994f ;" align = "left">
	<?php
		echo "Hi ".$_SESSION['name'];
	?>
	</h3>
	<h2 class = "addpatient" align = "center" style = "font-family : courier; " >Update Your Password</h2>
	<div class = "rpass1" >
	<form action = "resetpass.php" method = "post" >
	<div class = "rpass2" >
	<table align = "center" cellpadding = "8px" cellspacing = "1px">
		<br /><br />
		<tr>
			<td>New Password</td><td><input type = "password" name = "newpass" /></td>
		</tr>
		<tr>
			<td>Confirm Password</td><td><input type = "password" name = "confirm" /></td>
		</tr>
		<tr>
			<td colspan = "2" align = "center" ><input type = "submit" name = "submit" value = "Submit" /></td>
		</tr>
	</table>
	</div>
	</form>
	</div>
</body>
</html>

<?php
	include('../dbcon.php');
	$roll = $_SESSION['rollno'];
	if(isset($_POST['submit']))
	{	
		$newpass = $_POST['newpass'];
		$confirm = $_POST['confirm'];
		
		if($newpass != $confirm)
		{
			?>
			<script>
				alert("New and Confirm passwords are not matched !!!");
				window.open('resetpass.php', '_self');
			</script>
			<?php
		}
		else
		{
			$qry = "UPDATE `admin` SET `password` = '$newpass' WHERE `rollno` = '$roll'";
		
			$run = mysqli_query($con, $qry);
			if($run == True)
			{
				?>
				<script>
					alert("Password updated successfully !!");
					window.open('redirect1.php', '_self');
				</script>
				<?php
			}
			session_destroy();
		}
	}
	
?>
