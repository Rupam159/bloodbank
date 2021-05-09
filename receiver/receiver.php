<!DOCTYPE html>
<head>
	<title>Donate Blood Donate Life</title>
	<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>

	
	<script type="text/javascript">
		
		function validateform(thisform)
		{
			var User = thisform.revID.value;
			var Pass = thisform.revPass.value;
			var n= Pass.length;
			var format = /^[A-Za-z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
			var isValid = format.test(Pass.value);
			if (User==null || User=="") {
				alert("Enter Valid Username");
				return false;
			}
			else {
				return true;
			}
			if (Password==null || Password=="") {
				alert("Enter Valid Username");
				return false;
			}
			else {
				return true;
			}
			if (n<6) {
				alert("Password should have atleast 6 charecters");
			}
		}
	</script>

<div class="heading">Welcome to Blood Bank Management</div>
<form onsubmit="return validateform(this)" method="post" action="insert.php">
<div class="wrapper-body1">
      <h3>Personal Details</h3>
        <div class="login">
            <div class="left-side">
                    <div class="field name">
                            <p>First Name *</p>
                            <input type="text"  name="First" required="">
						</div>
						<div class="field name">
                            <p>Middle Name *</p>
                            <input type="text"  name="Middle" required="">
						</div>
						<div class="field name">
                            <p>Last Name *</p>
                            <input type="text"  name="Last" required="">
						</div>
						<div class="field date">
                            <p>Date Of Birth *</p>
                            <input type="date" name="birth" required="">
						</div>
                        
            </div>
            <div class="right-side">
						<div class="field weight">
                            <p>Age *</p>
                            <input type="number" name="years">
                        </div>
                        <div class="field weight">
							<p>Gender *</p>
							<select class="selection" name="gender" id="">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
							
						</div>
						<div class="field address">
							<p>Permanent Residence* </p>
							<textarea name="addr" rows="5" cols="50" type="text"></textarea>
							

                        </div>
            </div>
            
            
        </div>

        <h3>Requirements</h3>
        <div class="information">
            <div class="left-side">
				<div class="field weight">
                            <p>Type of Blood *</p>
                            <select class="selection" name="blood" required="" id="">
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
			<div class="field weight">
                            <p>Blood required in *</p>
                            <input type="number" name="days">
                        </div>
            </div>
            
            
        </div>

        <h3>Login Detalis</h3>
        <div class="contact-information">
            <div class="left-side">
			<div class="field password">
                            <p>Username*</p>
                            <input type="text" name="revID" required="">
                        </div>
                        <div class="field conf-password">
                            <p>Password *</p>
                            <input type="password" name="revPass">
                        </div>
                        
            </div>
            <div class="right-side">
						<div class="field email-id">
                            <p>Email ID* </p>
                            <input type="email" name="revEmail">
                        </div>
						<div class="field phone-number">
                            <p>Phone No* </p>
                            <input type="phone" name="revCon">
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


<!-- <p>Welcome to Blood Bank Management</p>
<fieldset>
	<legend>Personal Details</legend>
<form onsubmit="return validateform(this)" method="post" action="insert.php">
	<table>
		<tr>
		<td>First Name</td><td>:<input type="text" name="First" placeholder="Enter First Name" required=""></td>
		</tr>
		<tr>
		<td>Middle Name</td><td>:<input type="text" name="Middle" placeholder="Enter Middle Name"></td>
		</tr>
		<tr>
		<td>Last Name</td><td>:<input type="text" name="Last" placeholder="Enter Last Name" required=""></td>
		</tr>
		<tr>
			<td>Permanent Residance</td><td>:<textarea name="addr" placeholder="Address"></textarea></td>
		</tr>
		<tr>
			<td>DOB</td><td>:<input type="date" name="birth"></td>
		</tr>
		<tr>
			<td>Age</td><td>:<input type="number" name="years"></td>
		</tr>
		<tr>
			<td><input type="radio" name="gender" value="Male">Male</td>
			<td><input type="radio" name="gender" value="Female">Female</td>
			<td><input type="radio" name="gender" value="Other">Other</td>
		</tr>
		
	<br>
</table>
</fieldset>
<fieldset>
	<legend>Requirements</legend>
	<table>
		<tr>
			<td>Type of blood</td>
			<td>:
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
		</tr>
		<tr>
			<td>Blood required in</td><td>:<input type="number" name="days" placeholder="days">&nbsp;days</td>
		</tr>
	</table>
</fieldset>	
<fieldset>
	<legend>Login Detalis</legend>
		<table>	

		<tr>
			<td>Username</td><td>:<input type="text" name="revID" placeholder="Username"></td>
		</tr>
		<tr>
			<td>Password</td><td>:<input type="password" name="revPass" placeholder="Password"></td>
		</tr>
		<tr>
			<td id="info" colspan="2" >(Password should contain atleast one upper case, lower case and a special charecter)</td>
		</tr>
		<tr>
			<td>Email</td><td>:<input type="email" name="revEmail" placeholder="Email"></td>
		</tr>
		<tr>
			<td>Contact</td><td>:<input type="phone" name="revCon" placeholder="Phone no."></td>
		</tr>
		
</table>
</fieldset>
<br>
		<center><button>Register</button></center>
</form>

<br> -->
</body>
</html>