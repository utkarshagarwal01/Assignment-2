<?php  
$uid=$_POST['uid'];

$connection=mysqli_connect("localhost","root","","ttatva15");

$query="SELECT * FROM `users` WHERE `uid` = $uid";
$result=mysqli_query($connection,$query);

if(!$result)
{
	die ("<h2>Database Query Failed.</h2>");
}
else
{

$row = mysqli_fetch_row($result);
if($row[0]==$uid)
{
echo "<h1>User Found with details: "."<br><br></h1>";
echo "<h2>User id: ".$row[0]."<br>";
echo "Name: ".$row[1]."<br>";
echo "Phone: ".$row[2]."<br></h2>";
}
else
echo "<h2>Details were not found in our database.</h2>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>