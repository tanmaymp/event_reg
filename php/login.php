<html>
<head>
<title>
Login page
</title>
</head>
<body>
<CENTER>
<h1 style="font-family:Comic Sans Ms;text-align="center";font-size:20pt;
color:#00FF00;>
<H1>Admin Login </H1>
</h1>
<form name="login">
<table cellspacing="40">
<tr>
<td><b>Username:</b></td>
<td><input type="text" name="userid"></td>
</tr>
<tr>
<td><b>Password</b></td>
<td><input type="password" name="pswrd"/></td>
</table>
<input type="button" onclick="check(this.form)" value="Login!"/><BR><p>
<input type="reset" value="Cancel">
</form>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == '<username>' && form.pswrd.value == '<password>')
  {
    window.open('admin.php')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>
</CENTER>
</body>
</html>