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

$sql = "SELECT * FROM fashion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    	echo"<table border=2>";
	echo"<tr> <td>Crewleader</td> <td>Crewname</td> <td>College</td> <td>Email</td> <td>Contact</td> <td>Registration</td> </tr>";
    while($row = $result->fetch_assoc()) {
echo"<tr> <td>".$row["grplea"]."</td> <td>".$row["grpname"]."</td> <td>".$row["college"]."</td> <td>".$row["email"]."</td> <td>".$row["contact"]."</td> <td>".$row["reg_date"]."</td> </tr>";
            }
} else {
    echo "0 results";
}
echo"</table>";

$conn->close();
?>