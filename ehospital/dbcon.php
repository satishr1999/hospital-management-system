<?php 

	$con = mysqli_connect('localhost','root','','ehospital') or die(mysqli_error());
	
	if($con == false)
	{
		echo "Not connected !";
	}
	
?>
	
