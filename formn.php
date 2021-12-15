<html>
<head>
<title> Persona </title>

<link rel="stylesheet" href="regforms.css">
<link rel="stylesheet" href="navigation.css">
</head>
<script>
		function validateform()
		{
			
			
			var f=document.persona.fname.value;
			var l=document.persona.lname.value;
                        var e=document.persona.eid.value;
			var t=document.persona.tal.value;
			var c=document.persona.con.value;
			var clg=document.persona.cn.value;
			var a=document.persona.add.value;
                        var n1=/^[A-Za-z]+$/;
                        var n2=/^[A-Za-z]+$/;
			var n3=/^[0-9]+$/;
			var vemail=/^([A-Za-z]+)([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
			
			/*if(f==""||f==null)
			{
				alert("Please enter your first name");
				document.persona.fname.focus();
				return false;
			}

                    	if(l==""||l==null)
			{
				alert("Please enter your last name");
				document.persona.lname.focus();
				return false;
			}

                        if(e==""||e==null)
			{
				alert("Please enter an Email-id");
				document.persona.eid.focus();
				return false;
			}
			if(!(vemail.test(e)))
			{
			alert("Please Enter Valid Email-id");
			document.persona.eid.focus();
			return false;
			}

                        if(t==""||t==null)
			{
				alert("Please enter your Talent");
				document.persona.tal.focus();
				return false;
			}*/

                        if(c==""||c==null)
			{
				alert("Please enter your Contact Number");
				document.persona.con.focus();
				return false;
			}

                        if(c.length<10||c.length>10)
			{
				alert("Please enter 10 digit Contact Number");
				document.persona.con.focus();
				return false;
			}

			if(!n3.test(c))
			{
				alert("Do not use alphabate or special character in contact number");
				document.persona.con.focus();
				return false;
			}

                        if(clg==""||clg==null)
			{
				alert("Please enter your College Name");
				document.persona.cn.focus();
				return false;
			}


                        if(a==""||a==null)
			{
				alert("Please enter your Address");
				document.persona.add.focus();
				return false;
			}

        		
			if(!n1.test(f))
			{
				alert("Please enter alphabate only");
				document.persona.fname.focus();
				return false;
			}
			
             		if(!n2.test(l))
			{
				alert("Please enter alphabate only");
				document.persona.lname.focus();
				return false;
			}

                        
			if(c.length<10 || c.length>10)
			{
			alert("Enter valid phone number");
			document.persona.con.focus();
			return false;
			}
			
			return true;
			}
               
	</script>
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

<center>
<h1> Registration form </h1>
<hr>
<form name="persona" action="personaip.php" method="post" onsubmit="return validateform()">
<table cellspacing="10">

 <tr>
 <td>First Name:</td>
 <td><input type="text" name="fname"></td>
 </tr>

<tr>
<td>Last Name:</td>
<td> <input type="text" name="lname"></td>
 </tr>

<tr>
<td> Email ID:</td>
<td><input type="text" name="eid"></td>
 </tr>

<tr>
<td>Gender:</td>
<td><input type="radio" name="gen" value="Male"> Male<br>
<input type="radio" name="gen" value="Female"> Female</td>
</tr>

<tr>
<td>Talent:</td>
<td><input type="text" name="tal"></td>
</tr>

<tr>
<td>Contact no:</td>
<td><input type="text" name="con"></td>
</tr>

<tr>
<td>College Name:</td>
<td><input type="text" name="cn"></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="reset" value="Reset"></td>
</tr>

<tr>
<td colspan="2" align="center"> <input type="submit" value="Submit"></td></tr>


</table>
</form>
</body>
</html>