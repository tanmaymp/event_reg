<?php

include('phpqrcode/qrlib.php'); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";
$cl=$_POST['lea'];
$crn=$_POST['nam'];
$em=$_POST['eid'];
$co=$_POST['con'];
$col=$_POST['cn'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Dance (crewleader,crewname,email,contact,college)
VALUES ('$cl','$crn','$em','$co','$col')";

if ($conn->query($sql) === TRUE) {
    echo"<br>"."<br>"; 
   echo "<h1 align=center>YOUR EVENT->XIE DANCE +</h1><br>";
echo"<h3 align=center>Your Crew Has Been Rucessfully Registered</h3><br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Crew Name</b> :$crn<br>";
echo"<br>"."<br>"; 
echo"<b align=center>Crew Leader</b> :$cl<br>";
echo"<br>"."<br>";
   echo"<b align=center>Email ID</b> :$em<br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Contact No:</b>:$co<br>"; 
echo"<br>"."<br>"; 
   echo"<b align=center>College Name</b>:$col<br>";
echo"<br>"."<br>";
$st=$crn."_".$co."_".$cl;
QRcode::png(($st),'dance.png','l',8,4); 
   echo"<br>"."<br>";
   echo"<h1><i>Please take Screenshot</i></h1><br>";
   echo"<img src='dance.png' align=right>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>