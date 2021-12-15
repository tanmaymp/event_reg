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
$sql = "CREATE TABLE persona ( 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
gender varchar(9),
talent varchar(15),
contact varchar(10) primary key,
college varchar(15),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table persona created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>