<html>
<head>
<link href="admin_login_css.css" rel="stylesheet" type="text/css">
<title>login</title>
<body class="body"><br><br>
<table align="center" height="80%" width="80%" cellpadding="4" cellspacing="25" bgcolor="#000000" class="form" style="box-shadow:20px 20px 70px;color:#FFFFFF; border:5px #000000 solid;" border="2">
<tr><td colspan="2" id="t"><h2 align="center"><font color="#FF0000">ADMIN LOGIN</font></h2></td>
<form action="admin_login_check.php" enctype="multipart/form-data" method="post">

<tr><td rowspan="4" align="center"><img src="../project/admin.png" height="150" width="150"></td>

<td><font color="#FFFFFF" size="+2">USER-ID:</font></td>

<tr><td><input type="text" id="user" name="user" placeholder="Enter your user id" class="i1"/></td>

<tr><td><font color="#FFFFFF" size="+2">PASSWORD:</font></td>

<tr><td height="100"><input type="password" id="password" name="password" placeholder="password" class="i1" height="100%" /></td>

<tr><td colspan="2" align="center"><br><input type="submit" id="submit" name="submit" value="LOGIN" /></td>
</form>
</table>
</body>
</head>
</html>




<html>
<head>
<link href="admin_login_css.css" rel="stylesheet" type="text/css">
<title>login</title>
<body class="body"><br><br>
<h3 align="center">ADMIN LOGIN</h3><br><br>
<form action="admin_login_check.php" enctype="multipart/form-data" method="post">
<img src="../project/admin.png" align="left" height="200" width="200">
USER-ID:
<input type="text" id="user" name="user" placeholder="Enter your user id" class="i1"/><br><br><br><br>
PASSWORD:
<input type="password" id="password" name="password" placeholder="password" class="i1" /><br><br><br><br><br><br>
<input type="submit" id="submit" name="submit" value="LOGIN" /><br><br>
</form>
</body>
</head>
</html>