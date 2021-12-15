<html><head> <link rel="stylesheet" href="navigation.css">
<link rel="stylesheet" href="regforms.css">
</head>
<body>
<center>
<h1 align="center">ONLY FOR REGISTERED USERS</h1>
<p>
<h2 align="center">Change Of Personal Information</h2>
<p>
<h3 align="center">Enter Following Fields</h3>
<form name="change" action="updatein.php" method="post"><br>
<table cellspacing="40">

<td><b>To change:(incorrect)</b></td>
<td>
<select name="change">
<option value="name">Name(CHAI TIME)</option>
<option value="fname">FirstName(Persona)</option>
<option value="lname">LastName(Persona)</option>
<option value="talent">Talent(Persona)</option>
<option value="gender">Gender(Persona)</option>
<option value="contact">Contact</option>
<option value="email">Email ID</option>
<option value="college">College Name</option>
<option value="crewleader">CrewLeader(Dance)</option>
<option value="crewname">CrewName(Dance)</option>
<option value="grplea">CrewLeader(FashionShow)</option>
<option value="grpname">CrewName(Fashionshow)</option>
<option value="first">1st Participant(OPMIC)</option>
<option value="sec">2nd Participant(OPMIC)</option>
<option value="third">3rd Participant(OPMIC)</option>
</select></td>
</tr>
<tr>
<td><b>Previously entered Contact</b></td>
<td><input type="text" name="contact"></td>
</tr>
<tr>
<td><b>With:(correct)</b></td>
<td><input type="text" name="cr"></td>
</tr>
<tr>
<td><b>Event:</b></td>
<td>  
<select name="event">
<option value="persona">PERSONA</option>
<option value="chaitime">CHAI TIME</option>
<option value="opmic">OPENMIC</option>
<option value="fashion">FASHION SHOW</option>
<option value="dance">XIE DANCE+</option>
</select>
</td>
</tr>
</table>
<br>
<br>
<br>
<input type="Submit" value="Change">
</form>
</center>
</body>
</html>