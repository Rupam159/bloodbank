<!DOCTYPE html>
<html>
<head>
<title>Donate Blood Donate Life</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
		session_start();
		$server="127.0.0.1";
		$dbuser="root";	
		$dbpass="";
		$db="bloodbank";
		$con= new mysqli($server,$dbuser,$dbpass,$db);
		
		//update
		$usern=$_POST["revID"];
		$passw=$_POST["revPass"];
		

		if(!$con){
			echo "Failed";
		}
		else{

			echo "Update Your Profile";
				$name="SELECT * from r_self where Username='$usern' AND Password='$passw'";
				$result=$con->query($name);
				$row=$result->fetch_assoc();
			
				
		}
?>

<div class="heading">Welcome to Blood Bank Management</div>
<form action="profile.php" method="post" >
<div class="wrapper-body1">
      <h3>Personal Details</h3>
        <div class="login">
            <div class="left-side">
                    <div class="field name">
                            <p>First Name *</p>
                            <input type="text"  name="newf" value="<?php echo $row["S_Fname"]?>" required="">
						</div>
						<div class="field name">
                            <p>Middle Name *</p>
                            <input type="text"  name="newm" value="<?php echo $row["S_Mname"]?>" required="">
						</div>
						<div class="field name">
                            <p>Last Name *</p>
                            <input type="text"  name="newl" value="<?php echo $row["S_Lname"]?>" required="">
						</div>
						<div class="field date">
                            <p>Date Of Birth *</p>
                            <input type="date" name="birth" value="<?php echo $row["S_DOB"]?>" required="">
						</div>
                        
            </div>
            <div class="right-side">
						<div class="field weight">
                            <p>Age *</p>
                            <input type="number" name="years" value="<?php echo $row["S_Age"]?>">
                        </div>
                        <div class="field weight">
                            <p>Gender *</p>
                            <input type="text" name="gen" value="<?php echo $row["S_Gender"]?>">
						</div>
						<div class="field address">
                            <p>Permanent Residence* </p>
							<input rows="5" cols="50" type="text" name="add" value="<?php echo $row["S_Addr"]?>">
							<!-- <textarea rows="5" cols="50" type="text" name="add" value="<?php echo $row["S_Addr"]?>"></textarea> -->
							<!-- <textarea rows="5" cols="50" input name="add" placeholder="<?php echo $row["S_Addr"]?>" value="<?php echo $row["S_Addr"]?>" type="text"></textarea> -->

                        </div>
            </div>
            
            
        </div>

        <h3>Requirements</h3>
        <div class="information">
            <div class="left-side">
				<div class="field weight">
                            <p>Type of Blood *</p>
                            <input type="text" type="text" name="type" value="<?php echo $row["Type"]?>">
						</div>
						
            </div>
            <div class="right-side">
			<div class="field weight">
                            <p>Blood required in *</p>
                            <input type="number" name="days" value="<?php echo $row["Days"]?>">
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
                            <input type="email" name="email" value="<?php echo $row["Email"]?>">
                        </div>
						<div class="field phone-number">
                            <p>Phone No* </p>
                            <input type="phone" name="Con" value="<?php echo $row["Contact"]?>">
                        </div>
            </div>
            
            
        </div>
        <!-- <div class="terms">
          <input type="checkbox">
          <p class="checkbox-text">I agree to the Terms and Conditions and consent to have my contact and donor information published to the potential blood recipients.</p>
        </div> -->
        <div class="register">
          <button type="submit" class="register-btn1">Update</button>
        </div>
        
    </div>
</form>

<!-- <fieldset>
	<legend>Personal Details</legend>
	<form method="post" action="profile.php">
	<table>
		<tr>
		<td>First Name</td><td>:<input type="text" name="newf" value="<?php echo $row["S_Fname"]?>" placeholder="Enter First Name" required=""></td>
		</tr>
		<tr>
		<td>Middle Name</td><td>:<input type="text" name="newm" value="<?php echo $row["S_Mname"]?>"placeholder="Enter Middle Name"></td>
		</tr>
		<tr>
		<td>Last Name</td><td>:<input type="text" name="newl" value="<?php echo $row["S_Lname"]?>" placeholder="Enter Last Name" required=""></td>
		</tr>
		<tr>
			<td>Permanent Residance</td><td>:<input type="text" name="add" value="<?php echo $row["S_Addr"]?>"placeholder="Address"></textarea></td>
		</tr>
		<tr>
			<td>DOB</td><td>:<input type="text" name="birth" value="<?php echo $row["S_DOB"]?>"></td>
		</tr>
		<tr>
			<td>Age</td><td>:<input type="number" name="years" value="<?php echo $row["S_Age"]?>"></td>
		</tr>
		<tr>
			<td>Gender</td><td>:<input type="text" name="gen" value="<?php echo $row["S_Gender"]?>"></td>
		</tr>
	</table>
</fieldset>
<fieldset>
	<legend>Requirements</legend>
	<table>
		<tr>
			<td>Type of blood</td><td>:<input type="text" name="type" value="<?php echo $row["Type"]?>" placeholder="eg:A+/B+,O+,etc"></td>
		</tr>
			<tr>
			<td>Blood required in</td><td>:<input type="number" name="days" value="<?php echo $row["Days"]?>" placeholder="days">&nbsp;days</td>
		</tr>
</table>
</fieldset>
<fieldset>
	<legend>Login Detalis</legend>
		<table>	
		<tr>
			<td>Email</td><td>:<input type="email" name="email" value="<?php echo $row["Email"]?>" placeholder="Email"></td>
		</tr>
		<tr>
			<td>Contact</td><td>:<input type="phone" name="Con" value="<?php echo $row["Contact"]?>" placeholder="Phone no."></td>
		</tr>
		<tr>
				<td>Ussername</td><td>:<input type="text" name="revID" placeholder="Enter username"></td>
			</tr>
			<tr>
				<td>Password</td><td>:<input type="password" name="revPass" placeholder="Enter password"></td>
			</tr>
		</table>
</fieldset>
<br>
<center><button>Update</button></center>
</form> -->
</body>
</html>