
<link rel="stylesheet" href="search-style.css">
<a class="go-back" href="search.php">Go back</a>
<table>
  <thead>
    <tr>
		<th>Name
		<th>Gender
		<th>Email
		<th>Contact
  </thead>
  <tbody>
    
<?php
$host="127.0.0.1";
	$dbusername="root";	
	$dbpassword="";
	$dbname="bloodbank";
	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$type=$_POST["blood"];
$city=$_POST["city"];
$search="SELECT name,email,gender,contact FROM donor WHERE bloodtype='$type' AND city='$city'";
$result=$conn->query($search);
if(mysqli_num_rows($result)>0){
while($row=$result->fetch_assoc()){
echo "<tr>";
echo "<td>";
echo $row['name'];
echo "</td>";
echo "<td>";
echo $row['gender'];
echo "</td>";
echo "<td>";
echo $row['email'];
echo "</td>";
echo "<td>";
echo $row['contact'];
echo "</td>";
echo "</tr>";
}
}
else{
	echo "No such Donor was found!";
}

?>	
</tbody>
</table>

