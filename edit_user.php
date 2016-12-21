<?php  
$uid=$_POST['uid'];


$connection=mysqli_connect("localhost","root","","ttatva15");
$query="SELECT * FROM `users` WHERE `uid` = $uid";
$result=mysqli_query($connection,$query);

if(!$result)
{
	die ("Database Query Failed");
}
else
{
$row = mysqli_fetch_row($result);
if($row[0]==$uid )
{
session_start();
$_SESSION['id']=$row[0];
$_SESSION['name']=$row[1];
$_SESSION['phone']=$row[2];
header("Location: http://localhost/edit_user_details.php"); 
}
else
echo "<h2>Details were not found in our database.</h2>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>