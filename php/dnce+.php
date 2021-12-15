<html>
<head>
<title> XIE Dance+ </title>
<link rel="stylesheet" href="regforms.css">
<link rel="stylesheet" href="navigation.css">

</head>
<script>
function validateform()
  {
   var la=document.xd.lea.value;
   var na=document.xd.nam.value;
   var e=document.xd.eid.value;
   var c=document.xd.con.value;
   var cn=document.xd.cn.value;
   var vemail=/^([A-Za-z]+)([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var n1=/^[A-Za-z]+$/;
   var n2=/^[0-9]+$/;
	
  
   if (la==""||la==null)
    {
     alert("Please Enter Leader Name");
     document.xd.lea.focus();
     return false;
    }

   if (na==""||na==null)
    {
     alert("Please Enter Crew Name");
     document.xd.nam.focus();
     return false;
    }

    if(!n1.test(la))
   {
    alert("Please Enter alphabate only");
    document.xd.lea.focus();
    return false;
   }

   if(!n2.test(c))
    {
     alert("Enter Digits only");
     document.xd.con.focus();
     return false;
    }

   if (e==""||e==null)
    {
     alert("Please enter Email-id");
     document.xd.eid.focus();
     return false;
    }

   if (c==""||c==null)
    {
     alert("Please Enter Contact number");
     document.xd.con.focus();
     return false;
    }
   
   if(c.length<10||c.length>10)
   {
    alert("Please Enter a 10 Digit Number");
    document.xd.con.focus();     
     return false;
   }

    if (cn==""||cn==null)
    {
     alert("Please Enter College Name");
     document.xd.colname.focus();
     return false;
    }

    if(!(vemail.test(e)))
    {
    alert("Please Enter (Valid) Email id");
    document.xd.eid.focus();
    return false;
    }
	return true;	
    }


</script>
<body >

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

<form name="xd" method="post" onsubmit="return validateform()" action="danceip.php">
<h1> <center> Registration form </h1>
<hr><br>
<table cellspacing="20" align="center">

 <tr>
 <td>Crew Leader:</td>
 <td><input type="text" name="lea"></td>
 </tr>

<tr>
<td>Crew Name:</td>
<td> <input type="text" name="nam"></td>
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
<td><input type="text" name="cn"></td>
</tr>


<tr>
<td colspan="2" align="center"><input type="reset" value="Reset"></td>
</tr>

<tr >
<td colspan="2" align="center"><input type="submit" value="Submit">
</td>
</tr>



</table>
</form>
</body>
</html>