<?php
	$conn=mysqli_connect("localhost","root","") or die(mysql_error());
	mysqli_select_db($conn,'images');
	
	$name = $_POST['name'];
	$full_f = $_POST['full_f'];
	$full_t = $_POST['full_t'];
	$half_f = $_POST['half_f'];
	$half_t = $_POST['half_t'];
	$count_f = $_POST['count_f'];
	$count_h = $_POST['count_h'];
	$total = $_POST['total'];
	$query = "INSERT INTO `leave`(`name`, `lffull`, `ltfull`, `lfhalf`, `lthalf`, `fullcount`, `halfcount`, `total`) VALUES ('$name','$full_f','$full_t','$half_f','$half_t','$count_f','$count_h','$total')";
	mysqli_query($conn,$query) or die(mysql_error());
?>