<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

 <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>login</h2>
<form action="adminformr.php" method="post"> 

    
    <div class="form-group">
    Username:<input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
    Password<input type="Password" name="password" class="form-control" required><br>
    </div>
   <button type="submit" class="link_button">Login</button> 

   <!--<button> onclick = "validate() " Login</button>-->
    <a href=donor.php class="link_button">Register</a>
        
</form>

</body>
</html>


<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'bloodbank');



 $error = "Invalid Credentials";



$nam = $_POST['name'];

$pass = $_POST['password'];

$s= "select * from admin where user = '$nam' && password = '$pass'" ;


//$data = mysqli_query($con,$query);

//$result = mysqli_fetch_assoc($data);

$result = mysqli_query($con, $s);

$res = mysqli_fetch_assoc($result);

$name = $res['name'];

$num = mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['username'] = $name;
    header('location:adminlogin.php');
}
else{


    echo '<script type="text/javascript">'; 
    echo 'alert("Please fill correct credentials You are not a registered user.");'; 
    echo 'window.location.href = "adminform.php";';
    echo '</script>';

}

?>



