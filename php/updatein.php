<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";
$table=$_POST['event'];
$column=$_POST['change'];
$contact=$_POST['contact'];
$correct=$_POST['cr'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to update table
$sql ="UPDATE $table 
	SET $column='$correct'
	where $table.contact=$contact";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Change was made successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
<meta http-equiv="refresh" content="15; url=first.php"/>
</body>