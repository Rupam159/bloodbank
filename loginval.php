<?php
session_start();
//header('location:form.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'bloodbank');

/*if(!$conn){
	die("connection Failed");
}
 echo("<h1>Successfully logged in</h1>");

*/

 $error = "Invalid Credentials";
 
$name = $_POST['name'];

$pass = $_POST['password'];
//echo "$name";
//echo "$pass";

$s= "select * from donor where username = '$name' && password = '$pass'" ;

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num == 1)
{
	header('location:login.php');
}
else{

	//alert ("Invalid")
	echo '<script type="text/javascript">

          window.onload = function () { alert("Invalid Credentials"); }

</script>'; 
	

}

?>