<!DOCTYPE html>
<head>
	<title>Donate Blood Donate Life</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		
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
	</style>
</head>
<body>
<!-- 	
<p id>Welcome to Blood Bank Management</p>

<!--onsubmit="return validateform(this)" -->


<!-- 
<form  action="sahilhr.php" method="post">
	<fieldset	<legend>LOGIN INFORMATION</legend>
	<table>
		<tr>
		<td>Full Name</td><td>:<input type="text" name="name" placeholder="Enter First Name" required=""></td>
		</tr>
		<tr>
		<td>Email ID: </td><td>:<input type="email" name="email" placeholder="Enter Mail id" required=""></td>
		</tr>
		<tr>
		<td>Username</td><td>:<input type="text" name="username" placeholder="Username" required=""></td>
		</tr>
		<tr>
			
			<td>Password</td><td>:<input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required="">
			</td>
		</tr>
</table>
</fieldset><br><br>

 <fieldset>
 
	<legend>DONOR INFORMATION</legend>
<table>
<tr>
			<td>Date Of Birth</td><td>:<input type="date" name="dob" placeholder="date" required=""></td>
		</tr>
		
		<tr>
			<td>Age</td><td>:<input type="number" name="age" placeholder="Age" required=""></td>
		</tr>

		<tr>
			<td>Weight(Kg)</td><td>:<input type="number"name="weight" placeholder="weight" required=""></td>
		</tr>

		<tr>	
			<td>Gender:</td>
		
		</tr>
		<trs>
			<td><input type="radio" name="gender" value="Male">Male</td>
			<td><input type="radio" name="gender" value="Female">Female</td>
			<td><input type="radio" name="gender" value="Other">Other</td>
		</tr>
                 
                <tr>
			<td>Type of blood</td>
			<td>:
				<select name="bloodtype" required="">
					<option selected>A+</option>
					<option>A+</option>
					<option>B+</option>
					<option>AB+</option>
					<option>AB-</option>
					<option>O+</option>
					<option>O-</option>

				</select>
			</td>
		</tr>
	
         </table>

	 </fieldset> <br><br>
 
	
	
	<fieldset>
	
	<legend>CONTACT INFORMATION</legend>
	<table>
	<tr>
		<!--<td>Mobile No</td><td>:<input type="tel" name="contact" placeholder="contact no"></td>-->
		<!-- <td>Mobile No</td><td>:<input type="tel" name="contact" placeholder="contact no" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" 
title="contact no should be 10 digit" required=""></td>
	</tr>
	
	<tr>


		<td>Address</td><td>:
          <textarea rows="5" cols="50" name="address" placeholder="Address" required="">
           </textarea></td>
	</tr>

	<tr>
		<td>city:</td>
		
		<td>:
				<select name="city">
					<option selected>Mumbai</option>
					<option>Pune</option>
					<option>Karnataka</option>
					<option>Delhi</option>
					<option>Banglore</option>
					
				</select>
			</td>
	</tr>
	
	</table>
	

	 </fieldset>
 
		
		
	
<br>
		<center><button  type="submit" class="link_button">Register</button></center>
</form> -->

<div class="heading">Welcome to Blood Bank Management</div>
<form action="sahilhr.php" method="post" >
<div class="wrapper-body1">
      <h3>Login Information</h3>
        <div class="login">
            <div class="left-side">
                    <div class="field name">
                            <p>Full Name *</p>
                            <input type="text"  name="name" required="">
                        </div>
                        <div class="field email-id">
                            <p>Email ID* </p>
                            <input type="text" name="email" required="">
                        </div>
            </div>
            <div class="right-side">
                    <div class="field password">
                            <p>Username*</p>
                            <input type="text" name="username" required="">
                        </div>
                        <div class="field conf-password">
                            <p>Password *</p>
                            <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required="">
                        </div>
            </div>
            
            
        </div>

        <h3>Donor Information</h3>
        <div class="information">
            <div class="left-side">
                    <div class="field date">
                            <p>Date Of Birth *</p>
                            <input type="date" name="dob" required="">
						</div>
						<div class="field weight">
                            <p>Age *</p>
                            <input type="number" name="age" required="">
                        </div>
                        <div class="field blood-group">
                            <p>Your Blood Group* </p>
							<select class="selection" name="bloodtype" required="" id="">
                              <option value="A+">A+</option>
                              <option value="B+">B+</option>
                              <option value="O+">O+</option>
                              <option value="A-">A-</option>
                              <option value="B-">B-</option>
                              <option value="O-">O-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                            </select>
                        </div>
            </div>
            <div class="right-side">
                    <div class="field gender">
                            <p>Gender* </p>
                            <select class="selection" name="gender" id="">
                              <option value="Male">Male</option>
							  <option value="Female">Female</option>
							  <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="field weight">
                            <p>Weight(Kg) *</p>
                            <input type="number" name="weight" required="">
                        </div>
            </div>
            
            
        </div>

        <h3>Contact Information</h3>
        <div class="contact-information">
            <div class="left-side">
				<div class="field phone-number">
                            <p>Mobile No* </p>
                            <input type="tel" name="contact" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="contact no should be 10 digit" required="">
                        </div>
                        <div class="field address">
                            <p>Address* </p>
							<!-- <input type="text" name="address" placeholder="Address" required=""> -->
							<textarea rows="5" cols="50" name="address" placeholder="Address" required=""></textarea>
                        </div>
                        
            </div>
            <div class="right-side">
                        <div class="field city">
                            <p>City* </p>
                            <select class="selection" name="city" id="">
                              <option value="Mumbai">Mumbai</option>
                              <option value="Pune">Pune</option>
							  <option value="Karnataka">Karnataka</option>
							  <option value="Delhi">Delhi</option>
							  <option value="Banglore">Banglore</option>
                            </select>
                        </div>
            </div>
            
            
        </div>
        <!-- <div class="terms">
          <input type="checkbox">
          <p class="checkbox-text">I agree to the Terms and Conditions and consent to have my contact and donor information published to the potential blood recipients.</p>
        </div> -->
        <div class="register">
          <button type="submit" class="register-btn1">Register</button>
        </div>
        
    </div>
</form>
</body>
</html>