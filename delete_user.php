<?php  
$uid=$_POST['uid'];


$connection=mysqli_connect("localhost","root","","ttatva15");
$query="DELETE FROM users WHERE uid = $uid LIMIT 1";
$result=mysqli_query($connection,$query);

if(mysqli_affected_rows($connection)==1 && $result)
	echo "<h2>User with uid: ".$uid." was deleted from the database successfully.</h2>";
else if(mysqli_affected_rows($connection)==0)
	echo "<h2>There was no user with uid ".$uid." to delete.</h2>";
else if(!$result)
	die ("<h2>Database Query Failed</h2>");
mysqli_close($connection);
?>