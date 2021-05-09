
<?php
//session_start();
//if (!isset($_SESSION['username'])){
	//header('location:login.php');}
include("connection.php");
include("connection1.php");
$x=$_SESSION['username'];

$query = "select * from donor where username = '$x' ";
 
$data = mysqli_query($con,$query);
//$result = mysqli_fetch_assoc($data);
//$result = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data)
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="style.css">
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
                    <li><a href="http://localhost/donor/receiver/search.php">Search Donors</a></li>
                    <!-- <li><a href="http://localhost/donor/form.php">Register As Donor</a></li> -->
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
	</header>
	

	<div class="user">
		<p><h2>Hi <?php echo $_SESSION['username']; ?> </h2>
		<h2><a class="update" href="udate.php" >/    <?php
echo " <td> <a href='udate.php?name=$result[name]&email=$result[email]&username=$result[username]&password=$result[password]&dob=$result[dob]&weight=$result[weight]&contact=$result[contact] & address=$result[address]&city=$result[city]&ag=$result[age]'>Edit </td> "

?></a></h2>
		<h2><a class="logout" href="logout.php">/    Logout</a></h2></p>
	<!-- <div class="hi"><h2>Hi <?php echo $_SESSION['username']; ?> </h2></div>
	<div class="update"><a class="update" href="udate.php" >Update Profile</a> </div>
	<div class="logout"><a class="logout" href="logout.php">Logout</a></div> -->
</div>	
<div class="separation-block">
<div class="some-info">
	<h1> Welcome <?php echo $_SESSION['username']; ?> to Blood Bank</h1>
	<p>In order to maintain accurate informationand facilitate easy access, we recommend that you update your profile with any recent changes such as a change in the contact number, email id or may be with the date of your most recent blood donation.</p>
	<p>You may also help us spread the word by referring us to your friends.</p>
	<p>If you have any feedback, comments or suggestion, please feel free to share them through our contact us section.</p>
	<p>As always, it is a great pleasure to have you here,</p>
	<div class="redtext">BloodBank Team</span>

</div>

</div>	


<!-- <?php
echo " <td> <a href='udate.php?name=$result[name]&email=$result[email]&username=$result[username]&password=$result[password]&dob=$result[dob]&weight=$result[weight]&contact=$result[contact] & address=$result[address]&city=$result[city]&ag=$result[age]'>Edit </td> "

?> -->
</body>
</html>
