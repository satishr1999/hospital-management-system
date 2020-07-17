<html>
<head>
	<title>Hospital Management System</title>
	<link type = "text/css" rel = "stylesheet" href = "css/index.css" />
	<script type = "text/javascript" >
	var img1 = new Image();
	img1.src = "images/banner2.png";
	var img2 = new Image();
	img2.src = "images/banner3.jpg";
	var img3 = new Image();
	img3.src = "images/banner5.jpg";
	var img4 = new Image();
	img4.src = "images/banner6.jpg";
	
	
	</script>
</head>
<body style = " background-color: lightgreen; ">
<div class = "index" align = "center" >
<h1 style = " font-size : 50px;" >24/7 Life Care Hospital</h1>
</div>
<h3 style = "margin-top : -38px; margin-right : 40px; " align = "right"><a class = "alink" title = "Clik here for Admin Login !" href = "login.php">Admin Login</a></h3>
<h3 style = "margin-top : -39px; margin-left : 40px; color : #C70039 ;" align = "left">You are Welcome !</h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class = "a0" href = "patient.php">Patient Details</a>
<a class = "a1" href = "physician.php">Physicians</a>
<a class = "a2" href = "staff.php">Staff Members</a>
<a class = "a5" href = "blood_bank1.php">Blood Bank</a>
<a class = "a6" href = "contact_us.php">Contact Us</a>
<a class = "a7" href = "about_us.php">About Us</a>

<marquee behavior = "scroll" onmouseover = "this.stop();" onmouseout = "this.start();" ><h3 style = " margin-left : 40px; color : green;" align = "left">Want to be Admin? Registrations are open. Click <a href = "admin_request.php" class = "request" >here</a> and fill request form !</h3></marquee>
<br />
<hr color = "green" />
<img src = "images/banner1.png" name = "slide" width = "100%" style = "margin-top : -8px;"/>
<hr color = "green" style = "margin-top : 0px;" />

<script type = "text/javascript" >
	var count = 1
	function slideit()
	{
		document.images.slide.src=eval("img"+count+".src")
		if(count < 4)
		{
			count++
		}
		else
		{
			count = 1
		}
		setTimeout("slideit()",2000)
	}
	
	slideit()
</script>
<h3 style = " color : white; margin-left : 520px; margin-top : 100px;" >24/7 SUPPORT</h3>
<h3 style = "margin-top : -2px; margin-left : 550px; font-size : 20px;" ><a href ="about_us.php">About Us</a></h3>
</body>

</body>
</html>

