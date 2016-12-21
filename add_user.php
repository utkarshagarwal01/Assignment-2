<?php  
session_start();
if(isset($_SESSION["user"]) && !empty($_SESSION["user"]))
{
$nm=$_POST['name'];
$ct=$_POST['cont'];

$connection=mysqli_connect("localhost","root","","ttatva15");
$nm=mysqli_real_escape_string($connection,$nm);
$ct=mysqli_real_escape_string($connection,$ct);

$query="INSERT INTO users (`uid`, `name`, `phone`) VALUES (NULL, '$nm', '$ct');";
$result=mysqli_query($connection,$query);

if(!$result)
{
	die ("<h2>Database Query Failed</h2>");
}
else
{
$id=mysqli_insert_id($connection);
echo "<h2>User successfully registered with uid: " . $id."</h2>";
}
mysqli_close($connection);
}
else
{
	die("<h2>Login Failed</h2>");
}
?>