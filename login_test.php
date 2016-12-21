<?php
session_start();
$pa=$_POST['pass'];
$regno=$_POST['regnumber'];

$connection=mysqli_connect("localhost","root","","asgt1");
$query="SELECT pass FROM login WHERE regno='$regno'";
$result=mysqli_query($connection,$query);

$_SESSION["regno"]=$regno;

if(!$result)
{
	die ("Database Query Failed");
}

$row = mysqli_fetch_row($result);
 
 	if($row[0]==$pa && $pa!="")
 	{
 	 
  
	header( "refresh:3;url=http://localhost/register.php?regno=$regno"); 
	echo 'Login Successful. You will be redirected to the User registration page in 3 seconds.';
 
 	}
 else 
 {
 	echo "Login Failed";
 }
mysqli_free_result($result);
mysqli_close($connection);
`?>