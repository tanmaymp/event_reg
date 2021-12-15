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
$sql = "CREATE TABLE Fashion (
grplea varchar(20) not null,
grpname VARCHAR(30) primary key,
college VARCHAR(30) NOT NULL,
email VARCHAR(50),
contact varchar(20) not null,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Fashion created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>