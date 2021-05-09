<?php
session_start();

$con = mysqli_connect('localhost','root','','bloodbank');

mysqli_select_db($con,'bloodbank');

/*if(!$conn){
	die("connection Failed");
}
 echo("<h1>Successfully logged in</h1>");

*/

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$gender = $_POST['gender'];
$bloodtype = $_POST['bloodtype'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$city = $_POST['city'];
//echo "$name";
//echo "$pass";

$s= "select * from donor where username = '$username'" ;

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);
if($num == 1)
{
	echo "username already taken";
}
else{
	$reg= "insert into donor(name,email,username,password,dob,age,weight,gender,bloodtype,contact,address,city) values ('$name','$email','$username','$password','$dob','$age','$weight','$gender','$bloodtype','$contact','$address','$city')"; 
	mysqli_query($con,$reg);
	echo "Registration successful";
	header('location:form.php');

}
?>