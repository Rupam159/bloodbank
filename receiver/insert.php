<?php
	$host="127.0.0.1";
	$dbusername="root";	
	$dbpassword="";
	$dbname="bloodbank";
	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
	//$x=120;
	//$y=12300;

	//r_login
	$username=$_POST["revID"];
	$password=$_POST["revPass"];
	$email=$_POST["revEmail"];
	$contact=$_POST["revCon"];
	$type=$_POST["blood"];
	$req=$_POST["days"];

	//Self
	$firstname=$_POST["First"];
	$middlename=$_POST["Middle"];
	$lastname=$_POST["Last"];
	$Address=$_POST["addr"];
	$DOB=$_POST["birth"];
	$AGE=$_POST["years"];
	$Gender=$_POST["gender"];

	
	if(!$conn){
		die("Connection failed");
	} else{
		$self="INSERT INTO r_self (Username,Password,S_Fname,S_Mname,S_Lname,S_Addr,S_Gender,S_DOB,S_Age,Email,Contact,Days,Type) 
		VALUES ('$username','$password','$firstname','$middlename','$lastname','$Address','$Gender','$DOB',$AGE,'$email','$contact',$req,'$type');";
		mysqli_query($conn,$self);
		//echo "New record added successfully";
		header('location:R_Login.php');
		echo "<script> alert('registered')</script>";

		}
	?>