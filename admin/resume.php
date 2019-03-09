<?php
session_start();
require_once('connection/connection.php');
$sid=$_GET['sid'];

$array=mysql_query("select * from details where roll_no='$sid' ");
$var=mysql_fetch_array($array);

$n=$var['name'];
$f=$var['father_name'];
$b=$var['branch'];
$s=$var['sex'];
$y=$var['year_pass'];
$a=$var['address'];
$im=$var['image'];

$array1=mysql_query("select * from education where roll_no='$sid' ");
$var1=mysql_fetch_array($array1);
$m1=$var1['10_marks'];
$b1=$var1['10_board'];
$m2=$var1['12_marks'];
$b2=$var1['12_board'];

$array2=mysql_query("select * from intrest where roll_no='$sid' ");
$var2=mysql_fetch_array($array2);
$i1=$var2['intrest1'];
$i2=$var2['intrest2'];
$i3=$var2['intrest3'];

$array3=mysql_query("select * from training where roll_no='$sid' ");
$var3=mysql_fetch_array($array3);
$t1=$var3['training1'];
$t2=$var3['training2'];
$t3=$var3['training3'];
$t4=$var3['training4'];
$t5=$var3['training5'];
?>
<html>
<head>
<link href="resume_css.css" rel="stylesheet" type="text/css">
<title>resume</title>
<body>
<table height="80%" width="70%" border="4" bordercolor="#000000" align="center">
			<th bordercolor="#000000" border="2"><h3 align="center">RESUME</h3><br></th>
            <tr><td><form>
			NAME:
			<?php echo $n; ?>
			
			<?php
			 if($im !='')
				{
				echo"<img src='$im' height='100' width='100' align='right'/>";
				}
			 else
			   {
				}
			?><br><br>
			
			FATHER's NAME:
			<?php echo $f; ?><br><br>
			BRANCH:
			<?php echo $b; ?>
			<br><br>
			SEX:<br>
			<?php
				if($s == male)
				{
				echo"MALE";
				}
				else
				{
				echo"FEMALE";
				}
			?><br><br>
			PERMANENT ADDRESS:
			<?php echo $a; ?><br><br>
			Year of Passing :
			<?php echo $y; ?><br><br><br>
			
			<h4 align="center">EDUCATION</h4><br><br>
			10th Marks:
			<?php echo $m1; ?>&nbsp;&nbsp;
			10th Board:
			<?php echo $b1; ?><br><br>
			12th Marks:
			<?php echo $m2; ?>&nbsp;&nbsp;
			12th board:
			<?php echo $b2; ?><br><br>
			<h4 align="center">AREAS OF INTREST</h4><br>
			
			<?php echo $i1; ?><br />
			<?php echo $i2; ?><br>
			<?php echo $i3; ?><br>
			
			<h4 align="center">TRAINING AND CERTIFICATES</h4><br><br>
			
			<?php echo $t1; ?><br>
			<?php echo $t2; ?><br>
			<?php echo $t3; ?><br>
			<?php echo $t4; ?><br>
			<?php echo $t5; ?><br>
			<br><br>
			</form><br><br></td>
			<tr><td height="10%" width="100%" bordercolor="#000000" border="2"><a title="resume" alt="print screen" onClick="window.print()" target="_blank" id="print"><h4>PRINT</h4></a></td>
			</table>
</body>
</head>
</html>