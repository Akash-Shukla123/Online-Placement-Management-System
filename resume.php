<?php
session_start();
require_once('connection/connection.php');
$roll=$_SESSION['stud'];;

$array=mysql_query("select * from details where roll_no='$roll' ");
$var=mysql_fetch_array($array);

$n=$var['name'];
$f=$var['father_name'];
$b=$var['branch'];
$s=$var['sex'];
$y=$var['year_pass'];
$a=$var['address'];
$img=$var['image'];

$array1=mysql_query("select * from education where roll_no='$roll' ");
$var1=mysql_fetch_array($array1);
$m1=$var1['10_marks'];
$b1=$var1['10_board'];
$m2=$var1['12_marks'];
$b2=$var1['12_board'];

$array2=mysql_query("select * from intrest where roll_no='$roll' ");
$var2=mysql_fetch_array($array2);
$i1=$var2['intrest1'];
$i2=$var2['intrest2'];
$i3=$var2['intrest3'];

$array3=mysql_query("select * from training where roll_no='$roll' ");
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
<body class="resume">
<table height="80%" width="70%" align="center" class="r1">
			<th bordercolor="#000000" border="2"><h3 align="center">RESUME</h3><br></th>
            <tr><td><form>
			NAME:&nbsp;
			<?php echo $n; ?>
			
			<?php
			 if($img =='')
				{}
			 else
			   {
				 echo"<img src='$img' height='150' width='150' align='right'/>";
				}
			?><br><br>
			
			FATHER's NAME:&nbsp;
			<?php echo $f; ?><br><br>
			BRANCH:
			<?php echo $b; ?>
			<br><br>
			SEX:&nbsp;
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
			PERMANENT ADDRESS:&nbsp;
			<?php echo $a; ?><br><br>
			Year of Passing :&nbsp;
			<?php echo $y; ?><br><br><br>
			
			<h4 align="center">EDUCATION</h4><br><br>
			<table width="100%" class="r2">
			<tr><td>10th Marks:
			<?php echo $m1; ?>&nbsp;&nbsp;<br><br>
			10th Board:
			<?php echo $b1; ?><br><br></td>
			<td align="left">12th Marks:
			<?php echo $m2; ?>&nbsp;&nbsp;<br><br>
			12th board:
			<?php echo $b2; ?><br><br></td>
			</table>
			<h4 align="center">AREAS OF INTREST</h4><br>
			
			<?php echo "1. $i1"; ?><br /><br>
			<?php echo "2. $i2"; ?><br><br>
			<?php echo "3. $i3"; ?><br><br>
			
			<h4 align="center">TRAINING AND CERTIFICATES</h4><br><br>
			
			<?php echo "1. $t1"; ?><br><br>
			<?php echo "2. $t2"; ?><br><br>
			<?php echo "3. $t3"; ?><br><br>
			<?php echo "4. $t4"; ?><br><br>
			<?php echo "5. $t5"; ?><br><br>
			<br><br>
			</form><br><br></td>
			<tr><td height="10%" width="100%" bordercolor="#000000" border="2"><a title="print screen" alt="print screen" onClick="window.print();" target="_blank">PRINT</a><br><br></td>
			<td><a href="index.php?page=6">BACK</a></td>
			</table>
</body>
</head>
</html>