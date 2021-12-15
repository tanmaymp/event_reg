<?php

include('phpqrcode/qrlib.php'); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";
$ft=$_POST['na'];
$sc=$_POST['nam'];
$td=$_POST['name'];
$em=$_POST['eid'];
$cot=$_POST['con'];
$col=$_POST['c'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO opmic (first, sec, third, email, contact, college)
VALUES ('$ft','$sc','$td','$em','$cot','$col')";

if ($conn->query($sql) === TRUE) {
    echo"<br>"."<br>"; 
   echo "<h1 align=center>OPEN MIC 6.0</h1><br>";
echo"<h3 align=center>Your Group Has Been Rucessfully Registered</h3><br>";
echo"<br>"."<br>"."<br>"; 
   echo"<b align=center>Participants</b> :1.$ft 2.$sc 3.$td<br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Email ID</b> :$em<br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Contact No:</b>:$cot<br>"; 
echo"<br>"."<br>"; 
   echo"<b align=center>College Name</b>:$col<br>";
$st=$ft."_".$sc."_".$td."_".$cot;
QRcode::png(($st),'mic.png','l',10,5); 
   echo"<br>"."<br>";
   echo"<h1><i>Please take Screenshot</i></h1><br>";
   echo"<img src='mic.png' align=right>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>