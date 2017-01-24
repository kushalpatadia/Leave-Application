<!DOCTYPE html>
<html lang="en">
<head>
   <title>Project 1</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="design.css">
   
</head>
<body>

<?php
   $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "images";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }
   $res=mysqli_query($conn,"select * from leave");
   while($row=mysqli_fetch_array($res))
   {
      echo "hell";
   }
   // $flag=0;

   // while($row=mysqli_fetch_array($res))
   // {
   //    if ($flag<2) {
   //    echo "<td>"; 
   //    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="400" width="250"/>';
   //    echo "<br>";
   //    echo "Product Name : {$row['pname']} <br> ".
   //          "Product Price : {$row['pprice']} <br> ".
   //          "<a href='addcart.php?pid={$row['pid']}'>Add to Cart</a><br>".
   //          "<a href='addwish1.php?pid={$row['pid']}'>Add to WishList</a><br>";
   //    echo "<br>";
   //    echo "</td>";
   //    $flag++;
   //    }
   //    else
   //    {
   //       echo "<td>"; 
   //       echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="400" width="250"/>';
   //       echo "<br>";
   //       echo "Product Name : {$row['pname']} <br> ".
   //             "Product Price : {$row['pprice']} <br> ".
   //             "<a href='addcart.php?pid={$row['pid']}'>Add to Cart</a><br>".
   //             "<a href='addwish1.php?pid={$row['pid']}'>Add to WishList</a><br>";
   //       echo "<br>";
   //       echo "</td>";
   //       echo "</tr>";
   //       $flag=0;
   //       echo "<tr>";
   //    }
   // }
   // echo "</tbody>";
   // echo "</table>";

?>   

</body>
</html>