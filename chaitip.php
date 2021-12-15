<?php
include('phpqrcode/qrlib.php'); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";
$na=$_POST['nam'];
$em=$_POST['eid'];
$ct=$_POST['con'];
$cl=$_POST['cn'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO chaitime (name, email, contact, college)
VALUES ('$na','$em','$ct','$cl')";

if ($conn->query($sql) === TRUE) {
   echo"<br>"."<br>"; 
   echo "<h1 align=center>YOUR EVENT->CHAI TIME WITH KENNY SEBASTIAN</h1><br>";
echo"<h3 align=center>You Have Been Sucessfully Registered</h3>";
echo"<br>"."<br>"; 
   echo"<b align=center>Name</b> :$na<br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Email ID</b> :$em<br>";
echo"<br>"."<br>"; 
   echo"<b align=center>Contact No:</b>:$ct<br>"; 
echo"<br>"."<br>"; 
   echo"<b align=center>College Name</b>:$cl<br>";
$st=$na."_".$ct."_".$cl;
QRcode::png(($st),'chai.png','l',10,5); 
   echo"<br>"."<br>";
   echo"<h1><i>Please take Screenshot</i></h1><br>";
   echo"<img src='chai.png' align=right>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>