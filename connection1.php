<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'bloodbank');

if(!$con)
{
	die("connection failed because ".mysqli_connect_error());
}

//else{
	//echo"failed";

//	die("connection failed because ".mysqli_connect_error());
//}
?>