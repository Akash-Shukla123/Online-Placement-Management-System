<?php
session_start();
require_once('connection/connection.php');
$userroll=$_SESSION['stud'];

if($userroll == true)
{}
else
{
?>
<script type="text/javascript">
alert("first create your account");
document.location.href="index.php?page=4";
</script>
<?php
}
$array=mysql_query("select * from details where roll_no='$userroll' ");
$var=mysql_fetch_array($array);

$n=$var['name'];
$f=$var['father_name'];
$b=$var['branch'];
$s=$var['sex'];
$y=$var['year_pass'];
$a=$var['address'];
$img=$var['image'];

$array1=mysql_query("select * from education where roll_no='$userroll' ");
$var1=mysql_fetch_array($array1);
$m1=$var1['10_marks'];
$b1=$var1['10_board'];
$m2=$var1['12_marks'];
$b2=$var1['12_board'];

$array2=mysql_query("select * from intrest where roll_no='$userroll' ");
$var2=mysql_fetch_array($array2);
$i1=$var2['intrest1'];
$i2=$var2['intrest2'];
$i3=$var2['intrest3'];

$array3=mysql_query("select * from training where roll_no='$userroll' ");
$var3=mysql_fetch_array($array3);
$t1=$var3['training1'];
$t2=$var3['training2'];
$t3=$var3['training3'];
$t4=$var3['training4'];
$t5=$var3['training5'];
?>
<html>
<head>
<link href="details_css.css" rel="stylesheet" type="text/css">
<title>registration</title>
<body>
<div align="left" class="details">
<h3 align="center" class="hd">REGISTRATION FORM</h3><br>
<font color="#22D982"><h2 align='left'>
<?php
echo "WELCOME";?>&nbsp;&nbsp;&nbsp;<?php echo "17$userroll";?></h2></font>
<h4 align="center" class="txt">PERSONAL DETAILS</h4><br><br>

<form action="details_check.php" enctype="multipart/form-data" method="post">
<table align="center" width="100%" class="tb">
<tr ><td>NAME:
<input type="text" name="name" id="name" placeholder ="enter your name" value="<?php echo $n; ?>"><br><br><br>
FATHER's NAME:
<input type="text" name="father" id="father" value="<?php echo $f; ?>" placeholder="enter your father's name"><br><br><br>
BRANCH:
<select name="branch" class="branch">
<option value="<?php echo $b; ?>"><?php echo $b; ?></option>
<option value="">select type</option>
<option value="cse">CSE</option>
<option value="it">IT</option>
<option value="mechanical">MECHANICAL</option>
<option value="electrical">ELECTRICAL</option>
<option value="civil">CIVIL</option>
<option value="electronics and electrical">ELECTRONICS and ELECTRICAL</option>
</select><br><br><br>
SEX:<br><br>
<?php
if($s == male)
{
echo"MALE:<input type='radio' name='sex' id='male' value='male' checked>";?><br><?php
echo"FEMALE:<input type='radio' name='sex' id='female' value='female'>";
}
elseif($s == female)
{
echo"MALE:<input type='radio' name='sex' id='male' value='male'>";?><br><?php
echo"FEMALE:<input type='radio' name='sex' id='female' value='female' checked>";
}
else
{
echo"MALE:<input type='radio' name='sex' id='male' value='male'>";?><br><?php
echo"FEMALE:<input type='radio' name='sex' id='female' value='female'>";
}
?><br></td>
<td align="center">	PERMANENT ADDRESS:
	<textarea name="address" id="address" rows="6" cols="30" placeholder="enter your address" ><?php echo $a; ?></textarea><br><br><br><br><br>
	Year of Passing :
	<select name="year"  id="year" >
	<option value="<?php echo $y; ?>"><?php echo $y; ?></option>
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
	<br><br><br></td>
<tr><td width="100%" colspan="2"><br><br><?php
 if($img =='')
	{}
 else
   {
     echo"<img src='$img' height='100' width='100'/>";
	}
?><br><br>
Upload Your Image: <br>
<input type="file" name="image" id="image" accept="image/jpeg"><br><br></td>

</table>

<h4 align="center" class="txt">EDUCATION</h4><br><br>
<table width="100%" class="tb">
<tr><td>10th Marks:
<input type="text" name="marks1" id="marks1" placeholder="enter your 10th marks" value="<?php echo $m1; ?>"><br><br>
10th Board:
<select name="board1" class="board1">
<option value="<?php echo $b1; ?>"><?php echo $b1; ?></option>
<option value="">select board</option>
<option value="cbse">CBSE</option>
<option value="icse">ICSE</option>
<option value="jack">JACK</option>
<option value="karnataka">KARNATAKA</option>
<option value="others">other</option>
</select></td>

<td align="center">
12th Marks <font color="#FF0000" class="f">(Optional)*</font>:
<input type="text" name="marks2" id="marks2" placeholder="enter your 12th marks" value="<?php echo $m2; ?>"><br><br>
12th board:
<select name="board2" class="board2">
<option value="<?php echo $b2; ?>"><?php echo $b2; ?></option>
<option value="">select board</option>
<option value="cbse">CBSE</option>
<option value="icse">ICSE</option>
<option value="jack">JACK</option>
<option value="karnataka">KARNATAKA</option>
<option value="others">others</option>
</select></td>
</table>


<h4 align="center" class="txt">AREAS OF INTREST</h4><br><br>

<font color="#FF0000" class="f">minimum 1 area of intrest is compulsory*</font><br><br>
1.&nbsp;<textarea name="intrest[]" id="intrest" placeholder="your areas of intrest are....." cols="50" value="<?php echo $i1; ?>"><?php echo $i1; ?></textarea><br><br>
2.&nbsp;<textarea name="intrest[]" id="intrest" placeholder="your areas of intrest are....." cols="50" value="<?php echo $i2; ?>"><?php echo $i2; ?></textarea><br><br>
3.&nbsp;<textarea name="intrest[]" id="intrest" placeholder="your areas of intrest are....." cols="50" value="<?php echo $i3; ?>"><?php echo $i3; ?></textarea><br><br>

<h4 align="center" class="txt">TRAINING AND CERTIFICATES</h4><br><br>
<font color="#FF0000" class="f">minimum 3 trainings or certificates is compulsory*</font><br><br>
1.&nbsp;<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t1; ?>"><?php echo $t1; ?></textarea><br><br>
2.&nbsp;<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t2; ?>"><?php echo $t2; ?></textarea><br><br>
3.&nbsp;<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t3; ?>"><?php echo $t3; ?></textarea><br><br>
4.&nbsp;<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t4; ?>"><?php echo $t4; ?></textarea><br><br>
5.&nbsp;<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t5; ?>"><?php echo $t5; ?></textarea><br><br>
<br><br><br><br>
<table width="100%">
<tr><td align="right">
<input type="submit" name="submit" id="submit" value="SUBMIT">
<td align="left"><input type="reset" name="reset" id="reset" value="RESET">
</form>
</td>
</table><br><br><br><br>
<div align="center">
<a href="resume.php" id="a1">View Resume</a><br><br>
</div>
</div>

<div align="right" id="logout">
<a href="logout.php">LOGOUT</a>
</div>
</body>
</head>
</html>