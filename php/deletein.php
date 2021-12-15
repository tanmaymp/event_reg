<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";
$table=$_POST['event'];
$column=$_POST['con'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to update table
$sql ="DELETE from $table 
	where contact=$column";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Your Registration has been cancelled</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
<meta http-equiv="refresh" content="15; url=http://localhost/first.php"/>
</body>
</html>