<?php
session_start();
?>
<html>
<head>
<link href="student_css.css" rel="stylesheet" type="text/css">
<title>admin login</title>
<body class="bod">
<h2 align="center" id="st">STUDENT DETAILS</h2><br><br><br><br>
		 <form action="student_check.php" enctype="multipart/form-data" method="post">
		<table align="center" cellspacing="20"><tr><td>BRANCH:
			<select name="branch" class="branch">
			<option value="">select type</option>
			<option value="cse">CSE</option>
			<option value="it">IT</option>
			<option value="mechanical">MECHANICAL</option>
			<option value="electrical">ELECTRICAL</option>
			<option value="civil">CIVIL</option>
			<option value="electronics and electrical">ELECTRONICS and ELECTRICAL</option>
			</select></td>
			<td>Year of passing:
			<select name="year" class="year">
			<option value="">select year</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option> 
			</select></td>
<tr><td colspan="2" align="center">
 			<input type="submit" id="submit" name="submit" value="SUBMIT"/><td>
			</table>
			</form>
<table border="3" bordercolor="#000000" height="10%" width="100%">
<tr> <td align="center">SL NO.</td>
     <td align="center">ROLL NO.</td>
     <td width="40%" align="center">NAME</td>
	 <td colspan="3" align="center">ACTION</td>
<?php
$br=$_SESSION['branch'];
$yr=$_SESSION['year'];
require_once('connection/connection.php');
$array=mysql_query("select * from details where branch='$br' && year_pass='$yr' ");
    
 $no=1;
 while($var=mysql_fetch_array($array))
   {
		$r=$var['roll_no'];
		$n=$var['name'];
		echo"<tr>
		  <td align='center'>$no</td>
		  <td align='center'>17$r</td>
		  <td align='center'>$n</td>
		   <td align='center'><a href='student_update.php?sid=$r'>UPDATE</a></td>
		   <td align='center'><input type='button' name='view' onclick='view($r)' value='view'></td>
		   <td align='center'><input type='button' name='delete' onclick='del($r)' value='delete'></td>";
$no++;
   }

?>
<script type="text/javascript">
function view(vie)
{
document.location.href="resume.php"
}
function del(del)
 {
 if(confirm("are you sure you want to delete")){
  document.location.href="student_delete.php?<?php echo "del_id=$r" ?>";
  
  }
  }
</script>
</table>
</body>
</head>
</html>