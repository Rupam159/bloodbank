<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
<header class="page-header">
        <div class="wrapper">
            <div class="logo">
                <img src="images/b_logo.png" alt="Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="http://localhost/donor/index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="http://localhost/donor/receiver/R_Login.php">Receiver</a></li>

                    <li><a href="http://localhost/donor/form.php">Register As Donor</a></li>
                    <!-- <li><a href="receiver/R_Login.php">Receiver</a></li> -->

                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
	</header>
	<main>

<form method="post" action="result.php">
<div class="wrapper-body1 search-d">
       
		<h2 class="red">Want to search Donors?</h2>
        <div class="information">
            <div class="left-side">
                        <div class="field blood-group">
                            <p>Select Blood Type* </p>
							<select class="selection" name="blood">
							<option selected value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
                        </select>
                        </div>
            </div>
            <div class="right-side">
                    <div class="field gender">
                            <p>Select City* </p>
                            <select class="selection" name="city" id="">
								<option selected value="Mumbai">Mumbai</option>
								<option value="Pune">Pune</option>
								<option value="Navi Mumbai">Navi Mumbai</option>
								<option value="Nashik">Nashik</option>
                			</select>
                        </div>
                        
            </div>
            
            
        </div>

        <!-- <div class="terms">
          <input type="checkbox">
          <p class="checkbox-text">I agree to the Terms and Conditions and consent to have my contact and donor information published to the potential blood recipients.</p>
        </div> -->
        <div class="register">
          <button type="submit" class="register-btn1">Search</button>
        </div>
        
    </div>
</form>


	
	<!-- Want to search Donors?
	<br>
	<form method="post" action="result.php">
	<table>
	<tr>
	<td>Select blood type:
	<select name="blood">
					<option selected value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>

				</select>
	</td>
	<td>Select City:
	<select name="city">
		<option selected value="Mumbai">Mumbai</option>
		<option value="Pune">Pune</option>
		<option value="Navi Mumbai">Navi Mumbai</option>
		<option value="Nashik">Nashik</option>
	</select>
	</td>
	<td><button>Search</button></td>
	</tr>
	</table>
	</form> -->
	</main>

	
</body>
</html>