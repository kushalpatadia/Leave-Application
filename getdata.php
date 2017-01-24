<?php
	$conn=mysqli_connect("localhost","root","") or die(mysql_error());
	mysqli_select_db($conn,'images');
	
	$findme = $_POST['findme'];
  	$res=mysqli_query($conn,"SELECT * FROM leaves where name = '$findme'");
   	while($row=mysqli_fetch_array($res))
    {
       echo "name: " .$row['name']. "<br>FULL LEAVE<br>from: ".$row['lffull']. "---to:" .$row['ltfull']. 
       "<br>HALF LEAVE<br>from: ".$row['lfhalf']. "---to:" .$row['lthalf']."<br>Total::".$row['total']."<br>";
    }
     $conn->close();
?>
