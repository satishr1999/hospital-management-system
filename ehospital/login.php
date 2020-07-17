<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		header('location:admin/admindash.php');
	}
?>

<html>
<head>
<title>Hospital Management System</title>
<style>

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

.alink
{
	text-decoration : none;
	color :  #C70039 ;
}

.t1
{
	width : 35%;
	height : 79%;
	border : 1px solid white;
	margin-left : 420px;
	margin-top : 20px;
	background-color :#aeb2e5;
}
.t2
{
	margin-right : 75px;
	
}

.sign
{
	margin-top : -32px;
}
.a3link
{
	text-decoration : none;
	color :  #C70039 ;
	margin-top : -140px;

}
.upform
{
	text-decoration : none;
}

.upform:hover, .upform:active
{
    text-decoration : underline;
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
	<h1 style = " font-size : 40px;" >Admin Login</h1>
	</div>
	<div class = "a3link" >
	<h3 style = "margin-top : -38px; margin-left : 40px; " align = "left"><a class = "a3link" title = "Back to Home !" href = "index.php">Back</a></h3>
	</div>	
	<h3 style = "margin-top : 80px; margin-right : 40px; " align = "right"><a class = "alink" title = "Clik here for Home !" href = "index.php">Home</a></h3>
	<h3 style = "margin-top : -40px; margin-left : 40px; color : #C70039" align = "left">You are Welcome !</h3>
	<br />
	<div class = "t1" >
	<form action = "login.php" method = "post" >
	<div class = "t2" >
	<table align = "center" cellpadding = "11px" cellspacing = "2px">	
	<tr>
	<div class = "sign">
	<td style = " font-size : 30px; color :#8c5c2f; ">Sign In</td>
	</div>
	</tr>
	<div class = "uandP">
	<tr>
	<td><img src = "images/admin.png" width = "245px" height = "185px"  style = " margin-left : 65px; " /></td>
	</tr>
	<tr>
	<td><input type = "text" name = "uname" style = " width : 125%; height : 40px; " placeholder = "Username" required /></td>
	</tr></br >
	<tr>
	<td><input type = "password" name = "pass" style = " width : 125%; height : 40px; " placeholder = "Password" /></td>
	</tr><br />
	<tr>
	<td align = "center" ><input type = "submit" name = "login" value = "LOG IN" style = " width : 125%; height : 40px; " /></td>
	</tr>
	<tr>
	<td><p align = "right" style = " margin-right : -77px; margin-top : -5px; " ><a class = "upform" href = "admin/fpassword.php" >Forgot Password ?</a></p></td>
	</tr>
	</div>
	
</table>
</div>
</form>
</div>

</body>
</html>
<?php

	include('dbcon.php');
	
	if(isset($_POST['login']))
	{
		$username = $_POST['uname'];
		$password = $_POST['pass'];
			
		$qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password';";
		
		$run = mysqli_query($con, $qry);
		$row = mysqli_num_rows($run);
		
		if($row < 1)
		{
			?>
			<script>
				alert("Username or Password is incorrect !!!");
				window.open('login.php', '_self');
			</script>
			<?php
		}
		else
		{
			$data = mysqli_fetch_assoc($run);
			$id = $data['id'];
			$name = $data['fname'];
			$rollno = $data['rollno'];
			$age = $data['age'];
			$_SESSION['uid'] = $id;
			$_SESSION['name'] = $name;
			$_SESSION['rollno'] = $rollno;
			$_SESSION['age'] = $age;
			$_SESSION['fname'] = $data['fname'];
			$_SESSION['lname'] = $data['lname'];
			$_SESSION['rollno'] = $data['rollno'];
			$_SESSION['image'] = $data['image'];
			header('location:admin/admindash.php');
		}
	}

?>
