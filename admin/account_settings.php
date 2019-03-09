<?php
session_start();
require_once('connection/connection.php');
?>
<html>
<head>
<link href="account_css.css" rel="stylesheet" type="text/css">
<title>admin login</title>
<body class="bd">
<form action="account_check.php" enctype="multipart/form-data" method="post">
<h2 align="center" id="ch">CHANGE YOUR USER ID</h2><br /><br /><br /><br />
CURRENT USER ID:
<input type="text" name="user" id="user" placeholder="current user-id" /><br /><br /><br />
NEW USER ID:
<input type="text" name="new_user" id="new_user" placeholder="New password" /><br /><br /><br />
<input type="submit" name="submit1" id="submit1" value="CHANGE USER-ID" /><br /><br /><br />

<h2 align="center" id="ch1">CHANGE YOUR PASSWORD</h2><br /><br /><br /><br />
CURRENT PASSWORD:
<input type="text" name="current" id="current" placeholder="Current password" /><br /><br /><br />
NEW PASSWORD:
<input type="text" name="new" id="new" placeholder="New password" /><br /><br /><br />
RE-TYPE PASSWORD:
<input type="text" name="retype" id="retype" placeholder="retype New password" /><br /><br /><br />
<input type="submit" name="submit2" id="submit2" value="CHANGE PASSWORD" />
</form>
</body>
</head>
</html>