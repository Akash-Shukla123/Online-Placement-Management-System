<?php
session_start();
require_once('connection/connection.php');
$array=mysql_query('select * from company');

$sid=$_GET['sid'];
$_SESSION['c_id']=$sid;

$sid1=$_GET['sid1'];
$_SESSION['roll_no']=$sid1;

$ar1=mysql_query("select * from company where c_id='$sid' ");
$vr1=mysql_fetch_array($ar1);
$c_name=$vr1['c_name'];
$cid1=$vr1['c_id'];

$ar2=mysql_query("select * from details where roll_no='$sid1' ");
$vr2=mysql_fetch_array($ar2);
$rl=$vr2['roll_no'];
$yr1=$vr2['year_pass'];
?>

<html>
<head>
<link href="placement_css.css" rel="stylesheet" type="text/css">
<title>admin login</title>
<body class="body">
<h2 align="center" id="pla">PLACEMENT DETAILS</h2><br><br>
		 <form action="placement_check.php" enctype="multipart/form-data" method="post">
		 	ROLL NO. :
			<input type="text" value="17-" size="3" id="rol2" readonly width="20">
			<input type="text" name="roll" id="roll" placeholder="enter student roll no." maxlength="5" value="<?php echo $rl; ?>" /><br><br>
			COMPANY NAME:
			<select name="c_id" class="c_id">
			<option value="<?php echo $cid1; ?>"><?php echo $c_name; ?></option>
			<option value="">select type</option>
			<?php 
			while($var=mysql_fetch_array($array))
			   {
               $c_id=$var['c_id'];
			   $cmp=$var['c_name'];
			   
			echo"<option value='$c_id'>$cmp</option>";
			 }
			?>
			</select>
			<br><br>
			YEAR:
			<select name="year" class="year">
			<option value="<?php echo $yr1; ?>"><?php echo $yr1; ?></option>
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
			</select>	<br><br><br>
 			<input type="submit" id="submit" name="submit" value="SUBMIT"/><br><br>
			<br><br>
			
			
			BRANCH:
			<select name="branch" class="branch">
			<option value="">select type</option>
			<option value="cse">CSE</option>
			<option value="it">IT</option>
			<option value="mechanical">MECHANICAL</option>
			<option value="electrical">ELECTRICAL</option>
			<option value="civil">CIVIL</option>
			<option value="electronics and electrical">ELECTRONICS and ELECTRICAL</option>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;
			YEAR:
			<select name="year1" class="year1">
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
			</select>
			<br><br><br>
 			<input type="submit" id="check" name="check" value="CHECK"/><br><br>
			</form>
<table border="2" bordercolor="#003366" height="10%" width="100%">
<tr> <td align="center">SL NO.</td>
     <td align="center">ROLL NO.</td>
     <td align="center" width="30%">NAME</td>
	 <td align="center" width="30%">COMPANY NAME</td>
	 	 <td align="center">YEAR OF PASSING</td>
	 <td align="center" colspan="2">ACTION</td>
<?php
session_start();
$br=$_SESSION['br'];
$yr=$_SESSION['yr'];
	$t=1;	
		$array1=mysql_query("select * from details where branch='$br' && year_pass='$yr' ");
		while($var1=mysql_fetch_array($array1))
    {
		 $roll=$var1['roll_no'];
		 $n=$var1['name'];
		 $y=$var1['year_pass'];
		
		$array2=mysql_query("select * from placement_detail where year='$yr' && roll_no='$roll' ");
		$var2=mysql_fetch_array($array2);
		echo $cmp_id=$var2['c_id'];
		
		$array3=mysql_query("select * from company where c_id='$cmp_id' ");
		$var3=mysql_fetch_array($array3);

		$cname=$var3['c_name'];
		$c_id=$var3['c_id'];
		
		echo"<tr>
		  <td align='center'>$t</td>
		  <td align='center'>17$roll</td>
		  <td align='center'>$n</td>
		    <td align='center'>$cname</td>
			<td align='center'>$y</td>
		   <td align='center'><a href='?page=3&sid=$c_id&sid1=$roll'>UPDATE</a></td>
		   <td align='center'><a href='placement_delete.php?sid=$c_id&sid1=$roll'>DELETE</a></td>";
$t++;
}
?>
</table>
</body>
</head>
</html>