<?php
session_start();
$rn=$_SESSION["regno"];
$nm=$_POST['name'];
$ph=$_POST['phone'];
$db=$_POST['dob'];
$clg=$_POST['clg'];
$brn=$_POST['brn'];
$lng=$_POST['lng'];


$connection=mysqli_connect("localhost","root","","asgt1");
$clg=mysqli_real_escape_string($connection,$clg);
$lng=mysqli_real_escape_string($connection,$lng);

$query="INSERT INTO user (regno, name, phone, dob, clg, brn, lng) VALUES ($rn,'$nm',$ph,$db,'$clg','$brn','$lng')";
$result=mysqli_query($connection,$query);

if($result)
{
	echo "Details entered Successfully";
}
else
{
	die("Database Query Failed.". mysqli_error($connection));
}
mysqli_close($connection);
?>

