<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

 <!-- <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>login</h2>
<form action="form1.php" method="post"> 

    
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

</body> -->
</html>

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
    $_SESSION['username'] = $name;
    header('location:login.php');
}
else{

   // echo "<script> myfunction(); </script>"; 

    echo '<script type="text/javascript">'; 
    echo 'alert("Please fill correct credentials You are not a registered user.");'; 
    echo 'window.location.href = "form.php";';
    echo '</script>';

}

?>
<!--<script>
         function myfunction()
         {
         var userPreference;

        if (confirm("invalid credentials ") == true) {

            userPreference = "Data saved successfully!";
             //header('location:form.php');
            
        } 
        document.getElementById("msg").innerHTML = userPreference; 
    }
</script>

---->




