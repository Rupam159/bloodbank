


<?php
//session_start();
//if (!isset($_SESSION['username'])){
	//header('location:login.php');}
include("adminconnection.php");
include("connection1.php");
$x=$_SESSION['username'];
//echo "$x";
$query = "select * from admin where user= '$x' ";
 
$data = mysqli_query($con,$query);
//$result = mysqli_fetch_assoc($data);
//$result = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="search-style.css">
</head>
<body>

	<a class="go-back" href="logout.php">Go back</a>

<!--<a class="float-right" href="udate.php" >UPDATE</a> 
<?php
//echo " <td> <a href='udate.php?name=$result[name]&email=$result[email]&username=$result[username]&password=$result[password]&dob=$result[dob]&weight=$result[weight]&contact=$result[contact] & address=$result[address]&city=$result[city]&ag=$result[age]'>Edit </td> "

?> --->
<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>





<table>
	<thead>
		<tr>
			<th>NAME
			<th>BLOOD TYPE
			<th>GENDER
			<th>CONTACT num
			<th>EMAIL ID
			<th>ADDRESS
			<th>CITY
			
			<th>REGISTRATION TYPE
			<th>DATE
			<th>OPERATIONS
			</thead>
  <tbody>










<?php
//include("file.php");
error_reporting(0);
include('connection1.php');
echo "<br>";
//$query = "select * from student where class='fe'";

$q = "select * from logs";

$data = mysqli_query($con,$q);
$total = mysqli_num_rows($data);// it will display how many records will fetch
//echo "$total";//it will display total records

//$result = mysqli_fetch_assoc($data);

//echo $result['rollno'] ." ".$result['name'] ." ".$result['class'];
echo "<br>";

if($total!= 0)

{
	
	//echo "table has records";

	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>";
echo "<td>";
echo $result['name'];
echo "</td>";
echo "<td>";
echo $result['btype'];
echo "</td>";
echo "<td>";
echo $result['gender'];
echo "</td>";
echo "<td>";
echo $result['pno'];
echo "</td>";
echo "<td>";
echo $result['email'];
echo "</td>";
echo "<td>";
echo $result['address'];
echo "</td>";
echo "<td>";
echo $result['city'];
echo "</td>";
echo "<td>";
echo $result['action'];
echo "</td>";
echo "<td>";
echo $result['date'];
echo "</td>";
echo "<td>";
echo  "<a href='admindelete.php?us=$result[username]' onclick='return checkdelete()'>Delete</a>";
echo "</td>";
echo "</tr>";




		




				

//echo $result['rollno'] ." ".$result['name'] ." ".$result['class'];
	}


}

else{
	echo "Table doesn't have records";
}



?>
</tbody>
</table>

<script type="text/javascript">
	function checkdelete()
	{
		return confirm('Are you sure?');

	}
</script>

<!-- <td> <a href='adminview.php?nm=$result[name]&bt=$result[btype]&gd=$result[gender]&ct=$result[pno]&em=$result[email]&add=$result[address]&ct=$result[city]&act=$result[action]&date=$result[date]'>Edit </td> -->



</body>
</html>




