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
$img=$var['image'];

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
<title>resume</title>
<body>
<h3 align="center">RESUME OF <?php echo"$sid";?></h3><br>
<form action="student_update_check.php" enctype="multipart/form-data" method="post">
<input type="text" name="id" value="<?php echo "$sid"; ?> "><br>
NAME:
<input type="text" name="name" id="name" value="<?php echo $n; ?>"><br><br>

<?php
 if($img =='')
	{}
 else
   {
     echo"<img src='$img' height='100' width='100' align='right'/>";
	}
?><br><br>

FATHER's NAME:
<input type="text" name="father" id="father" value="<?php echo $f; ?>"><br><br>
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
</select><br><br>
SEX:<br>
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
?><br><br>
PERMANENT ADDRESS:
<textarea name="address" id="address" rows="6" cols="30"><?php echo $a; ?></textarea><br><br>
Year of Passing :
<select name="year" class="year">
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
</select><br><br><br>
Upload Your Image: <br>
<input type="file" name="image" id="image" accept="image/jpeg"><br><br>
<h4 align="center">EDUCATION</h4><br><br>
10th Marks:
<input type="text" name="marks1" id="marks1" placeholder="enter your 10th marks" value="<?php echo $m1; ?>">
10th Board:
<select name="board1" class="board1">
<option value="<?php echo $b1; ?>"><?php echo $b1; ?></option>
<option value="">select board</option>
<option value="cbse">CBSE</option>
<option value="icse">ICSE</option>
<option value="jack">JACK</option>
<option value="karnataka">KARNATAKA</option>
<option value="others">other</option>
</select><br><br>
12th Marks:
<input type="text" name="marks2" id="marks2" placeholder="enter your 12th marks" value="<?php echo $m2; ?>">
12th board:
<select name="board2" class="board2">
<option value="<?php echo $b2; ?>"><?php echo $b2; ?></option>
<option value="">select board</option>
<option value="cbse">CBSE</option>
<option value="icse">ICSE</option>
<option value="jack">JACK</option>
<option value="karnataka">KARNATAKA</option>
<option value="others">others</option>
</select><br><br>
<h4 align="center">AREAS OF INTREST</h4><br><br>

<textarea name="intrest[]" id="intrest" placeholder="your areas of intrest are....." cols="50" value="<?php echo $i1; ?>"><?php echo $i1; ?></textarea><br>
<textarea name="intrest[]" id="intrest" placeholder="your areas of intrest are....." cols="50" value="<?php echo $i2; ?>"><?php echo $i2; ?></textarea><br>
<textarea name="intrest[]" id="intrest" placeholder="your areas of intrest are....." cols="50" value="<?php echo $i3; ?>"><?php echo $i3; ?></textarea><br>

<h4 align="center">TRAINING AND CERTIFICATES</h4><br><br>

<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t1; ?>"><?php echo $t1; ?></textarea><br>
<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t2; ?>"><?php echo $t2; ?></textarea><br>
<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t3; ?>"><?php echo $t3; ?></textarea><br>
<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t4; ?>"><?php echo $t4; ?></textarea><br>
<textarea name="training[]" id="training" placeholder="your trainings and certifcates are....." cols="50" value="<?php echo $t5; ?>"><?php echo $t5; ?></textarea><br>
<br><br><br><br>
<input type="submit" name="submit" id="submit" value="SUBMIT" align="middle">
<input type="reset" name="reset" id="reset" align="middle">
</form><br><br>
</body>
</head>
</html>