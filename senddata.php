<?php
	$conn=mysqli_connect("localhost","root","") or die(mysql_error());
	mysqli_select_db($conn,'images');
	
	$name = $_POST['search'];
	$full_f = $_POST['date1'];
	$full_t = $_POST['date2'];
	$half_f = $_POST['date3'];
	$half_t = $_POST['date4'];
	$count_f = $_POST['diff'];
	$count_h = $_POST['diff1'];
	$total = $_POST['diff2'];
	//echo"<script>alert('$name')</script>";
	//echo"<script>alert('$full_f')</script>";
	//echo"<script>alert('$full_t')</script>";
	//echo"<script>alert('$half_f')</script>";
	//echo"<script>alert('$count_f')</script>";
	//echo"<script>alert('$count_h')</script>";
	//echo"<script>alert('$total')</script>";

	//$query = "INSERT INTO leave(name, lffull, ltfull, lfhalf, lthalf, fullcount, halfcount, total) VALUES ('$name', '$full_f', '$full_t', '$half_f', '$half_t', '$count_f', '$count_h', '$total')";
	$query = "INSERT INTO `leave`(`name`, `lffull`, `ltfull`, `lfhalf`, `lthalf`, `fullcount`, `halfcount`, `total`) VALUES ('$name','$full_f','$full_t','$half_f','$half_t','$count_f','$count_h','$total')";

	//echo($query);
	$res= mysqli_query($conn,$query) or die(mysql_error());
	//echo ($res);
	if ($res == 0) {
		echo "data not inserted";
	}
	else
	{
		echo "Data inserted";
	}
	header("location:test.php");
?>