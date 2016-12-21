<?php
session_start();
if(!isset($_POST['submit']))
{
$nm=$_SESSION['name'];
$ph=$_SESSION['phone'];
$uid=$_SESSION['id'];

}
else
{

$nw_nm=$_POST['name'];
$nw_ph=$_POST['cont'];
$nm=$nw_nm;
$ph=$nw_ph;
$uid=$_SESSION['id'];

$connection=mysqli_connect("localhost","root","","ttatva15");
$nw_nm=mysqli_real_escape_string($connection,$nw_nm);

$query="UPDATE users SET name = '$nw_nm', phone = '$nw_ph' WHERE uid = $uid;";
$result=mysqli_query($connection,$query);

if(!$result)
{
	die ("<h2>Database Query Failed</h2>");
}
else
{
echo "<h2>User details successfully updated.</h2>";
}
mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet"
		      type="text/css"
              href="style.css">		
		<title>Edit User</title>
	</head>

<body>
<center>
	<form style=" font-size: 25px; font-family: sans-serif; " action="edit_user_details.php" method="POST">
		Name:<br>
		<input type="text" style=" height: 25px; " name="name" value="<?php echo htmlspecialchars($nm)?>" required><br>
		Contact No. : (Numeric Only)<br>
		<input type="text" style=" height: 25px; " pattern="[0-9]*" name="cont" value="<?php echo htmlspecialchars($ph)?>" required><br>
		<button type ="submit" class="button" style="padding: 10px 15px;" name="submit">Submit</button>
	</form>
</center>

</body>
</html>
<header></header>