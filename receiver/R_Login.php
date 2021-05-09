<!DOCTYPE html>
<head>
	<title>Donate Blood Donate Life</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<script type="text/javascript">
	function validate(thisform) {
			var User = thisform.user.value;
			var Pass = thisform.pass.value;

			if (User==null || User=="") {
				alert("Enter Valid Username");
				return false;
			}
			if (Pass==null || Pass=="") {
				alert("Enter Valid Username");
				return false;
			}
		}
		</script>
		<header class="page-header">
        <div class="wrapper">
            <div class="logo">
                <img src="images/b_logo.png" alt="Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="http://localhost/donor/index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="http://localhost/donor/receiver/search.php">Search Donors</a></li>
                    <!-- <li><a href="donor/donor.html">Register As Donor</a></li> -->
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
	<div class="dcontainer">
		<div class="row">
			<div class="col-md-6">
            <div class="wrapper-body">
            <h2 class="red">Login for Receivers</h2>
            
<form onsubmit="return validate(this)" class="login-donor" method="post" action="r_page.php"> 

    
	<div class="form-group dlogin-field ">
	Username:<input type="text" name="revID" class="form-control" required="">
    </div>
    <div class="form-group dlogin-field">
	Password :<input type="Password" name="revPass" class="form-control" required=""><br>
    </div>
    <div class="donor-btns">
    <button type="submit" class="login-btn">Login</button> 

<!--<button> onclick = "validate() " Login</button>-->
<a id="reg" href=receiver.php class="register-btn">Register</a>
    </div>
    
</form>
            </div>

</div>
</div>
 
</div>
		<!-- <fieldset>
			<legend>Login</legend>
				<form onsubmit="return validate(this)" method="post" action="r_page.php">
		
				<table>
				<tr>
					<td>Ussername</td><td>:<input type="text" name="revID" placeholder="Ussername" required=""></td>
				</tr>
				<tr>
					<td>Password</td><td>:<input type="password" name="revPass" placeholder="Password" required=""></td>
				</tr>
				</table>
				</fieldset>
					<br>
					<a id="reg" href="receiver.php">Register</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR<br>
					<button>Login</button>
		
	</form> -->
</body>
</html>