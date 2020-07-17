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
.details
{
	background-color : white;
	width : 85%;
	height : 53%;
	margin-left : 100px;
	margin-top : 20px;
}
.inbox
{
	background-color : pink;
	width : 65%;
	height : 84%;
	margin-left : 350px;
}
</style>
</head>
<body style = " background-color: #29506a; ">
<div class = "index" align = "center" >
<h1 style = " font-size : 40px;" > 24/7 Life Care HOSPITAL</h1>
</div>
<h3 style = "margin-top : -135px; margin-left : 40px; " align = "left"><a class = "alink" title = "Back to Homepage !" href = "index.php">Back</a></h3>
<h3 style = "margin-top : 70px; margin-right : 40px; " align = "right"><a class = "alink" title = "Clik here for Admin Login !" href = "login.php">Admin Login</a></h3>
<h3 style = "margin-top : -39px; margin-left : 40px; color : #C70039" align = "left">You are Welcome !</h3>
 
	<div class = "table" >
	<h2 class = "addpatient" align = "center" style = "font-family : courier; " >Get Patient(s) Details</h2>
	</div>
	
	<form method = "post" action = "patient.php" >
	<input type = "number" name = "reg_no" style = "width : 20%; margin-left : 38%;" placeholder = "Enter Patient's Registration No." required />
	<input type = "submit" name = "submit" value = "Search" />
	</form>
	
	<?php
		
		if(isset($_POST['submit']))
		{
			include('dbcon.php');
			
			$reg_no = $_POST['reg_no'];
			
			$qry = "SELECT * FROM `patient_history` WHERE `id` = '$reg_no';";
			$run = mysqli_query($con, $qry);
			$rows = mysqli_num_rows($run);
			if($rows < 1)
			{
				?>
					<script>
						alert("Unauthorized Patient Reg. Id !");
						window.open('patient.php', '_self');
					</script>
				<?php
			}
			$data = mysqli_fetch_assoc($run);
			if($run == True)
			{
				?>
				<div class = "details" >
				<img alt = "Image Not Available" src = "<?php echo "dataimg/".$data['image']; ?>"  width="240px" height="280px" style="margin-left:60px; margin-top : 25px; "  />
				<h3 style = "margin-left:400px; margin-top:-280px;">Registration Id : <?php echo $data['id'];?> </h3>
				<h3 style = "margin-left:400px; " >Name : <?php echo $data['name'];?></h3>
				<h3 style = "margin-left:400px; " >Mother's Name : <?php echo $data['mname'];?></h3>
				<h3 style = "margin-left:400px; " >Father's Name : <?php echo $data['fname'];?></h3>
				<h3 style = "margin-left:400px; " >Age : <?php echo $data['age'];?></h3>
				<h3 style = "margin-left:400px; " >Admit Date : <?php echo $data['admit_date'];?></h3>
				<h3 style = "margin-left:400px; " >Discharge Date : <?php echo $data['discharge_date'];?></h3>
				<h3 style = "margin-left:800px; margin-top:-285px;" >City : <?php echo $data['city'];?></h3>
				<h3 style = "margin-left:800px; " >Bed No : <?php echo $data['bed_no'];?></h3>
				<h3 style = "margin-left:800px; " >Ward No : <?php echo $data['ward_no'];?></h3>
				<h3 style = "margin-left:800px; " >Disease : <?php echo $data['disease'];?></h3>
				<h3 style = "margin-left:800px; " >Consultant : <?php echo $data['consultant'];?></h3>
				<h3 style = "margin-left:800px; " >Current Status : </h3>
				<h3 style = "margin-left:940px; margin-top : -41px; color : red;" ><?php echo $data['current_status'];?></h3>
				</div>
				<?php
			}
		}
	?>
