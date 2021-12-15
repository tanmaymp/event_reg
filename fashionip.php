<?php

include('phpqrcode/qrlib.php'); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";
$gl=$_POST['gleader'];
$gn=$_POST['gname'];
$col=$_POST['colname'];
$em=$_POST['eid'];
$cont=$_POST['con'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Fashion (grplea, grpname, college, email, contact)
VALUES ('$gl','$gn','$col','$em','$cont')";

if ($conn->query($sql) === TRUE) {
    echo"<br>"."<br>"; 
   echo "<h1 align=center>YOUR EVENT->Fashion Show</h1><br>";
echo"<h3 align=center>Your Crew Has Been Rucessfully Registered</h3><br>";
echo"<br>"."<br>"."<br>"; 
   echo"<b align=center>Crew Name</b> :$gn<br>";
echo"<br>"."<br>";
echo"<b align=center>Crew Leader</b> :$gl<br>";
echo"<br>"."<br>";  
   echo"<b align=center>Email ID</b> :$em<br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Contact No:</b>:$cont<br>"; 
echo"<br>"."<br>"; 
   echo"<b align=center>College Name</b>:$col<br>";
echo"<br>";
echo"<br>"."<br>"; 
$st=$gn."_".$gl."_".$cont."_".$col;
QRcode::png(($st),'fash.png','l',10,5); 
   echo"<br>"."<br>";
   echo"<h1><i>Please take Screenshot</i></h1><br>";
   echo"<img src='fash.png' align=right>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>