<?php
$pa=$_POST['pass'];
$us1=$_POST['user'];

$connection=mysqli_connect("localhost","root","","ttatva15");
$us=mysqli_real_escape_string($connection,$us1);

$query="SELECT pass FROM admin WHERE Id='$us'";
$result=mysqli_query($connection,$query);

if(!$result)
{
	die ("Database Query Failed");
}

$row = mysqli_fetch_row($result);
 
 if($row[0]==$pa && $pa!="")
 {
 	session_start();
	$_SESSION["user"]=$us1;  
header( "refresh:3;url=http://localhost/portal.html"); 
echo 'Login Successful. You will be redirected to the portal page in 3 seconds.';
 
 }
 else 
 {
 	echo "Login Failed";
 }
mysqli_free_result($result);
mysqli_close($connection);
?>