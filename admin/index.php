<?php
require_once('connection/connection.php');
session_start();
$admin=$_SESSION['admin'];
if($admin==true)
{}
else
{
?>
<script type="text/javascript">
alert("access denied");
document.location.href="http://localhost/placement?page=5";
</script>
<?php
}
echo"Welcome"?> &nbsp;<?php echo $admin;
?>

<html>
<head>
<link href="index_css.css" rel="stylesheet" type="text/css">
<title>admin</title>
<body class="bd">
<table height="150%" width="80%" class="table2" align="center">
	<th width="100%" height="10%" colspan="2">
	<font size="+2"><h2 align="center">PLACEMENT MANAGEMENT SYSTEM</h2></font></th>  
				
				<tr><td>
			<table height="100%" width="100%" align="left" class="table3">
							<tr>
							 <td align="center"><a href="?page=1">Student Details</a></td></tr>
							<tr>
							 <td align="center"><a href="?page=2">Company Details</a></td></tr>
							<tr>
							 <td align="center"><a href="?page=3">Placement Details</a></td></tr>
							<tr>
							 <td align="center"><a href="?page=4">Account Settings</a></td></tr>
							  </table>
				               </td>
					<td><table height="100%" width="100%" align="right" class="table4">
					<tr>
					<td align="center">
					<?php
					$a=$_GET['page'];
					switch($a)
					 {
					  case '':
					  case '1':
					  include('student_details.php');
					  break; 
					  case '2':
					  include('company_details.php');
					  break;
					  case '3':
					  include('placement_details.php');
					  break;
					  case '4':
					  include('account_settings.php');
					  break;
					  }
					?>
					</td>
					</tr>
					</table></td>
	
					<tr><td height="1%" width="100%" colspan="2"><footer class="foot">
					  <div align="right"> <a href="logout_admin.php">LOGOUT</a></div><br>
		               &copy;&nbsp;Copyright reserved.</td>

	 </table>
</body>
</head>
</html>			