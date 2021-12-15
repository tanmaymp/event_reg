<html>
<head>
	<title>OPENMIC</title>
	<link rel="stylesheet" href="regforms.css">
	<link rel="stylesheet" href="navigation.css">
	<script>
		function validateform()
		{
			
			
			var n=document.opmic.na.value;
			var ne=document.opmic.nam.value;
                        var w=document.opmic.name.value;
			var c=document.opmic.con.value;
			var e=document.opmic.eid.value;
			var cn=document.opmic.c.value;
			var n1=/^[A-Za-z]+$/;
			var n2=/^[0-9]+$/;
			var vemail=/^([A-Za-z]+)([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
			
			if(n==""||n==null)
			{
				alert("please enter 1st name");
				document.opmic.na.focus();
				return false;
			}
                    	if(ne==""||ne==null)
			{
				alert("please enter 1st name");
				document.opmic.nam.focus();
				return false;
			}
                        if(w==""||w==null)
			{
				alert("please enter 1st name");
				document.opmic.name.focus();
				return false;
			}
			if(!n1.test(n))
			{
				alert("please enter alphabate only");
				document.opmic.na.focus();
				return false;
			}
        		if(!n1.test(ne))
			{
				alert("please enter alphabate only");
				document.opmic.nam.focus();
				return false;
			}
             		if(!n1.test(w))
			{
				alert("please enter alphabate only");
				document.opmic.name.focus();
				return false;
			}
			if(!(vemail.test(e)))
			{
			alert("Please Enter (Valid) email id");
			document.opmic.eid.focus();
			return false;
			}
			if(e==""||e==null)
			{
				alert("please enter the Email id");
		        document.opmic.eid.focus();
				return false;
			}
			if(!n2.test(c))
			{
				alert("no alphabate or special character in contact number");
				document.opmic.con.focus();
				return false;
			}
                        if(!n1.test(cn))
			{
				alert("please enter alphabate only");
				document.opmic.c.focus();
				return false;
			}
			if(c.length<10 || c.length>10)
			{
			alert("Enter valid phone number");
			document.opmic.con.focus();
			return false;
			}
			
			return true;
			}
               
	</script>
</head>
	

<body>

<div class="header" align="left">
<div class="left"><img src="logo1.jpg" width="130px"></div>
<div calss="right">
<h2 style="font-size:30px;font-family:Arial,sans-serif;"><font color="white"><br><br>Spandan2018</font></h2>
</div>
<div class="bot">
<ul>
  <li><a href="first.php">Home</a></li>

  <li><a href="contact us.php">Contact</a></li>
  <li style="float:right"><a href="#about">About</a></li>
</ul>
</div>
</div>

<form name="opmic" method="post" action="opmicip.php" onsubmit="return validateform()">

<h1 align="center">Registration form</h1>

<hr>


<br><br>

<table cellpadding="10" align="center" > 

<tr>
<td>Participants:</td>
<td>
1.<input type="text" name="na" >

2.<input type="text" name="nam" >

3.<input type="text" name="name" >
</td>
</tr>



<tr>
<td> Email ID:</td>
<td><input type="text" name="eid"></td>
</tr>



<tr>
<td cellpadding="0">Requirements:</td>
<td><input type="checkbox" name="check1" value="drum">Drums <br><br>

<input type="checkbox" name="check2" value="keyboard"> Keyboard <br><br>
<input type="checkbox" name="check2" value="Flute"> Flute <br><br>
<input type="checkbox" name="check2" value="Amplifier"> Amplifier<br><br>

Guitar:
<select name="guitar">
<option value="Acoustic" selected> Acoustic
<option  value="electric"> Electric
</select></td>
</tr>

<tr>
<td>Contact no:</td>
<td><input type="text" name="con"></td>
</tr>

<tr>
<td>College Name:</td>
<td><input type="text" name="c"></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="reset" value="Reset"></td></tr>
<tr>
<td colspan="2" align="center"> <input type="submit" value="Submit">
</td></tr>


</table>

</form>
</body>
</html>