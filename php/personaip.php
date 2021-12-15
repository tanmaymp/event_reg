<?php
include('phpqrcode/qrlib.php'); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$em=$_POST['eid'];
$gn=$_POST['gen'];
$ct=$_POST['con'];
$col=$_POST['cn'];
$ta=$_POST['tal'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO persona (firstname, lastname, email,gender,talent,contact,college)
VALUES ('$fn','$ln','$em','$gn','$ta','$ct','$col')";

if ($conn->query($sql) === TRUE) {
    echo"<br>"."<br>"; 
   echo "<h1 align=center>YOUR EVENT->Persona</h1><br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Name</b> :$fn $ln<br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Email ID</b> :$em<br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Contact No:</b>:$ct<br>"; 
echo"<br>"."<br>"; 
   echo"<b align=center>College Name</b>:$col<br>";
$st=$fn."_".$ct."_".$ta;
QRcode::png(($st),'persona.png','l',10,5); 
   echo"<br>"."<br>";
   echo"<h1><i>Please take Screenshot</i></h1><br>";
   echo"<img src='persona.png' align=right>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>