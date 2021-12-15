<html>
<head>
<title>Fashion Show</title>
<link rel="stylesheet" href="regforms.css">
<link rel="stylesheet" href="navigation.css">
</head>

<script>
function validateform()
  {
   var la=document.fs.gleader.value;
   var na=document.fs.gname.value;
   var e=document.fs.eid.value;
   var c=document.fs.con.value;
   var cn=document.fs.colname.value;
   var vemail=/^([A-Za-z]+)([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var n1=/^[A-Za-z]+$/;
   var n2=/^[0-9]+$/;
	
  
   if (la==""||la==null)
    {
     alert("Please Enter Leader Name");
     document.fs.gleader.focus();
     return false;
    }

   if (na==""||na==null)
    {
     alert("Please Enter Crew Name");
     document.fs.gname.focus();
     return false;
    }

    if(!n1.test(la))
   {
    alert("Please Enter alphabates only");
    document.fs.gleader.focus();
    return false;
   }

   if(!n2.test(c))
    {
     alert("Enter Digits only");
     document.fs.con.focus();
     return false;
    }

   if (e==""||e==null)
    {
     alert("Please enter Email-id");
     document.fs.eid.focus();
     return false;
    }

   if (c==""||c==null)
    {
     alert("Please Enter Contact number");
     document.fs.con.focus();
     return false;
    }
   
   if(c.length<10||c.length>10)
   {
    alert("Please Enter a 10 Digit Number");
    document.fs.con.focus();     
     return false;
   }

    if (cn==""||cn==null)
    {
     alert("Please Enter College Name");
     document.fs.colname.focus();
     return false;
    }

    if(!(vemail.test(e)))
    {
    alert("Please Enter (Valid) Email id");
    document.fs.eid.focus();
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

<form name="fs" action="fashionip.php" method="post" onsubmit="return validateform()">
<h1> <center> Registration form </h1>
<hr><br>
<table cellspacing="20" align="center">

 <tr>
 <td>Group Leader:</td>
 <td><input type="text" name="gleader"></td>
 </tr>

<tr>
<td>Group Name:</td>
<td> <input type="text" name="gname"></td>
 </tr>

<tr>
<td> Email ID:</td>
<td><input type="text" name="eid"></td>
 </tr>

<tr>
<td>Contact no:</td>
<td><input type="text" name="con"></td>
</tr>

<tr>
<td>College Name:</td>
<td><input type="text" name="colname"></td>
</tr>


<tr >
<td colspan="2" align="center"><br> <input type="submit" value="Submit">
</td>
</tr>

<tr>
<td colspan="2" align="center"><input type="reset" value="Reset"></td>
</tr>

</table>
</form>
</body>
</html>