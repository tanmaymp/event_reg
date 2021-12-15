<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE opmic (
first VARCHAR(30) NOT NULL,
sec VARCHAR(30) NOT NULL,
third VARCHAR(30) NOT NULL,
email VARCHAR(50),
contact varchar(20) primary key,
college varchar(20),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table opmic created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>