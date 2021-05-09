<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style2.css">
	</head>
<body>
<?php
		//session_start();
		$server="127.0.0.1";
		$dbuser="root";	
		$dbpass="";
		$db="bloodbank";
		$con= new mysqli($server,$dbuser,$dbpass,$db);
	
		//login details
		$usern=$_POST["revID"];
		$passw=$_POST["revPass"];
		

		if(!$con){
			echo "Connection Failed";
		}
		else{
			$sql="SELECT Username,Password from r_self where Username='$usern' AND Password='$passw'";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				// echo "Welcome <br>";
				$name="SELECT * from r_self where Username='$usern' AND Password='$passw'";
				$result=$con->query($name);
				$row=$result->fetch_assoc();
				}
			else{
				echo "Wrong!!";
			}
		}
?>

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
                    <li><a href="http://localhost/donor/form.php">Register As Donor</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
	</header>
	

	<div class="user">
	<form action="r_update.php" method="post">
	<p><h2>Hi <?php echo $row["Username"]?></h2>
	<input class="hide" type="hidden" name="revID" value="<?php echo $row["Username"]?>" >
	<input class="hide" type="hidden" name="revPass" placeholder="Password" value="<?php echo $row["Password"]?>">
		<!-- <p><h2>Hi <?php echo $row["Username"]?> </h2> -->
		
          <button type="submit" class="register-btn1">Update</button>
        
		<!-- <button><h2><a class="logout" href="r_update.php">/    Update</a></h2></p></button> -->
	</form>
		
		
	<!-- <div class="hi"><h2>Hi <?php echo $_SESSION['username']; ?> </h2></div>
	<div class="update"><a class="update" href="udate.php" >Update Profile</a> </div>
	<div class="logout"><a class="logout" href="logout.php">Logout</a></div> -->
</div>	
<div class="separation-block">
<div class="some-info">
	<h1> Welcome <?php echo $row["Username"]?> to Blood Bank</h1>
	<p>In order to maintain accurate informationand facilitate easy access, we recommend that you update your profile with any recent changes such as a change in the contact number, email id or may be with the date of your most recent blood donation.</p>
	<p>You may also help us spread the word by referring us to your friends.</p>
	<p>If you have any feedback, comments or suggestion, please feel free to share them through our contact us section.</p>
	<p>As always, it is a great pleasure to have you here,</p>
	<div class="redtext">BloodBank Team</span>

</div>

</div>	



<!-- Click here to Update:
<form action="r_update.php" method="post">
	<table>
				<tr>
					<td>Ussername</td><td>:<input type="text" name="revID" value="<?php echo $row["Username"]?>" placeholder="Ussername"></td>
				</tr>
				<tr>
					<td>Password</td><td>:<input type="password" name="revPass" placeholder="Password" value="<?php echo $row["Username"]?>"></td>
				</tr>
				</table>
<button>Proceed</button>
</form> -->
</body>
</html>



