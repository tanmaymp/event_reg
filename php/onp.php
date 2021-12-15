<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM opmic";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    	echo"<table border=2>";
	echo"<tr> <td>First</td> <td>Second</td> <td>Third</td> <td>EMAIL-ID</td> <td>Contact No</td> <td>College</td> <td>Registration</td> </tr>";
    while($row = $result->fetch_assoc()) {
echo"<tr> <td>".$row["first"]."</td> <td>".$row["sec"]."</td> <td>".$row["third"]."</td> <td>".$row["email"]."</td> <td>".$row["contact"]."</td> <td>".$row["college"]."</td> <td>".$row["reg_date"]."</td> </tr>";
            }
} else {
    echo "0 results";
}
echo"</table>";

$conn->close();
?>