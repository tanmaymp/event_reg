<html>
<head> <link rel="stylesheet" href="navigation.css">
<link rel="stylesheet" href="regforms.css">
</head>
<style>


</style>


<title>Chai time</title>
	<script>
		function validateform()
		{
			var n=document.standup.nam.value;
			var g=document.standup.gen;
			var c=document.standup.con.value;
			var cn=document.standup.cn.value;
			var e=document.standup.eid.value;
			var n1=/^[A-Za-z]+$/;
			var n2=/^[0-9]+$/;
			var vemail=/^([A-Za-z]+)([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
		
			if(n==""||n==null)
			{
				alert("Please Enter Name");
				document.standup.nam.focus();
				return false;
			}
			if(!n1.test(n))
			{
				alert("Please Enter Alphabate Only");
				document.standup.nam.focus();
				return false;
			}
                        if(!n1.test(cn))
			{
				alert("Please Enter Alphabate Only");
				document.standup.cn.focus();
				return false;
			}
			if(!(vemail.test(e)))
			{
			alert("Please Enter (Valid) Email id");
			document.standup.eid.focus();
			return false;
			}
			if(e==""||e==null)
			{
				alert("Please Enter The Email id");
		        document.standup.eid.focus();
				return false;
			}
			if(c.length<10 || c.length>10)
			{
				alert("Please Enter Valid Contact Number");
		        	document.standup.con.focus();
				return false;
			}
			if(!n2.test(c))
			{
				alert("No Alphabate Or Special Character Contact Number");
				document.standup.con.focus();
				return false;
			}
                      
			for(var i=0;i<g.length;i++)
                        if(g[i].checked)
			break;
			if(i==g.length)
			{
				alert("Please Enter Your Gender");
				document.standup.gen.focus();
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


<form name="standup" method="post" onsubmit="return validateform()" action="chaitip.php">
<h1 align="center"> Registration form </h1>
<hr>

<table cellpadding="10" align="center" >

<tr>
<td>Name:</td>
<td><input type="text" name="nam"></td>
</tr>

<tr>
<td> Email ID:</td>
<td><input type="text" name="eid"></td>
</tr>

<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gen" value="Male"> Male<br>
<input type="radio" name="gen" value="Female"> Female</td>
</tr>


<tr>
<td>Contact no:</td>
<td><input type="text" name="con"></td>
</tr>

<tr>
<td>College Name:</td>
<td><input type="text" name="cn"></td>
</tr>


<tr  align="center"><td colspan="2">
<input type="reset" value="Reset"></td></tr>
<tr  align="center">
<td colspan="2"> <input type="submit" value="Submit"></td></tr>


</table>

</form>
</body>
</html>