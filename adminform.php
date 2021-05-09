<!DOCTYPE html>
<html>
<head>

<!-- <style type="text/css">
.link_button {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    border: solid 1px #20538D;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    background: #4479BA;
    color: #FFF;
    padding: 8px 12px;
    text-decoration: none;
}
</style> -->


    <title>login and register</title>
    <link rel="stylesheet" href="style.css">

	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
</head>
<body>
	<!-- <div class="container">
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
    <!---<a href=donor.php class="link_button">Register</a>--->
		
</form>
</div>
</div>
 
</div> -->

<!--<script src="" type="text/javascript"></script> --->


<header class="page-header">
        <div class="wrapper">
            <div class="logo">
                <img src="images/b_logo.png" alt="Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="http://localhost/donor/receiver/search.php">Search Donors</a></li>
                    <li><a href="http://localhost/donor/form.php">Register As Donor</a></li>
                    <li><a href="receiver/R_Login.php">Receiver</a></li>

                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
	<div class="dcontainer">
		<div class="row">
			<div class="col-md-6">
            <div class="wrapper-body">
            <h2 class="red">Admin Login</h2>
            
<form action="adminformr.php" method="post" class="login-donor"> 

    
	<div class="form-group dlogin-field ">
	Username:<input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group dlogin-field">
	Password :<input type="Password" name="password" class="form-control" required><br>
    </div>
    <div class="donor-btns">
    <button type="submit" class="login-btn">Login</button> 

<!--<button> onclick = "validate() " Login</button>-->
    </div>
    
</form>
            </div>

</div>
</div>
 
</div>

</body>
</html>