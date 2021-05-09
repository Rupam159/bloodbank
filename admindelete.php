<?php
include("connection1.php");
error_reporting(0);
$user =$_GET['us'];
$query = "delete from logs where username='$user'";
$data=mysqli_query($con,$query);

if($data)
{
	echo "<script> alert('record deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/donor/adminlogin.php">
	<?php
}

else
{
	echo "notdeleteed";
}
?>
