<!DOCTYPE html>
<html>
<head>
	<title>Donate Blood Donate Life</title>
</head>
<body>
<?php
$server="127.0.0.1";
$dbuser="root";	
$dbpass="";
$db="bloodbank";
$cont= new mysqli($server,$dbuser,$dbpass,$db);

$fname=$_POST["newf"];
$mname=$_POST["newm"];
$lname=$_POST["newl"];
$addr=$_POST["add"];
$dob=$_POST["birth"];
$age=$_POST["years"];
$gender=$_POST["gen"];
$type=$_POST["type"];
$day=$_POST["days"];
$em=$_POST["email"];
$con=$_POST["Con"];
$user=$_POST["revID"];
$pasw=$_POST["revPass"];

if(!$cont){
			echo "Failed";
		}
else{
$gender=$_POST["gen"];
	$update="UPDATE r_self SET S_Fname='$fname',S_Mname='$mname',S_Lname='$lname',S_Addr='$addr',
	S_Gender='$gender',S_DOB='$dob',S_Age='$age',Email='$em',Contact='$con',Days='$day',Type='$type' 
	WHERE Username='$user' AND Password='$pasw'";
	$res=$cont->query($update);
	echo "Successfully Updated";
	echo "<a href='http://localhost/donor/receiver/R_Login.php'>Return to Login Page</a>";

	
}
?>
</body>
</html>