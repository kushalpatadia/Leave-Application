<?php
$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db('images') or die(mysql_error());
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select * from register where fname like '%$q%' order by uid LIMIT 2");
while($row=mysql_fetch_array($sql_res))
{
$username=$row['fname'];
$b_username='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
?>

<div class="show" align="left">
<span class="search"><?php echo $final_username; ?><br/>
</div>
<?php
}
}
?>