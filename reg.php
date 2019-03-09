<html>
<head>

<title>login</title>
<body class="body">

<table align="center" height="70%" width="70%" cellpadding="4" cellspacing="25" bgcolor="#21CED8" style="box-shadow:20px 50px 200px; color:#000000">
<tr><td colspan="2"><h1 align="center">STUDENT LOGIN</h1></td>
<form action="reg_check.php" method="post" enctype="multipart/form-data">
<tr><td rowspan="4" align="center"><img src="../project/stdLogin.png" height="100" width="100" ></td>
<td>ROLL NO. :</td>
<tr><td><input type="text" id="roll1" value="17-" readonly size="1">
<input type="text" id="roll" name="roll" placeholder="Enter your roll" maxlength="5"/></td><br>
<tr><td>PASSWORD:</td><br>
<tr><td><input type="password" id="pass" name="pass" placeholder="password"/></td>
<tr><td colspan="2" align="center"><br><input type="submit" id="submit" name="submit" value="LOGIN" onClick="a()"/><br><br>
<a href="index.php?page=7">create an account</a></td>
</form>
</table><br><br>
</body>
</head>
</html>