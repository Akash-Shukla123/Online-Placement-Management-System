<?php
session_start();
$roll=$_SESSION['stud'];
require_once('connection/connection.php');

$name=$_POST['name'];
$father=$_POST['father'];
$branch=$_POST['branch'];
$sex=$_POST['sex'];
$year=$_POST['year'];
$address=$_POST['address'];


$filename=$_FILES["image"]["name"];
$tempname=$_FILES["image"]["tmp_name"];
$folder="admin/student/".$filename;
move_uploaded_file($tempname,$folder);

$marks1=$_POST['marks1'];
$board1=$_POST['board1'];
$marks2=$_POST['marks2'];
$board2=$_POST['board2'];

for($i=0;$i<3;$i++)
{
$intrest[$i]=$_POST['intrest'][$i];
}
for($j=0;$j<5;$j++)
{
$training[$j]=$_POST['training'][$j];
}
if($name!='' && $father!='' && $branch!='' && $sex!='' && $address!='' && $year!='' && $folder!='' && $marks1!='' && $board1!='' && $board2!=''&& $intrest[0]!='' && $training[0]!='' && $training[1]!='' && $training[2]!='')
 {
  mysql_query("delete from details where roll_no='$roll' ");
  mysql_query("delete from education where roll_no='$roll' ");
  mysql_query("delete from intrest where roll_no='$roll' ");
  mysql_query("delete from training where roll_no='$roll' ");
 
 
  mysql_query("insert into details values('','$roll','$name','$father','$branch','$sex','$year','$address','$folder')");
  mysql_query("insert into education values('','$roll','$marks1','$board1','$marks2','$board2') ");
  mysql_query("insert into intrest values('','$roll','$intrest[0]','$intrest[1]','$intrest[2]') ");
  mysql_query("insert into training values('','$roll','$training[0]','$training[1]','$training[2]','$training[3]','$training[4]') ");
  ?>
  ?>
  <script type="text/javascript">
  alert("submitted successfully");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
elseif($marks1=='')
 {
  ?>
  <script type="text/javascript">
  alert("enter your 10th marks");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
 elseif($board1=='')
 {
  ?>
  <script type="text/javascript">
  alert("enter your 10th board");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
 elseif($board2=='')
 {
  ?>
  <script type="text/javascript">
  alert("enter your 12th board");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
 elseif($intrest[0]=='')
 {
  ?>
  <script type="text/javascript">
  alert("write atleast 2 areas of intrest");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
 elseif($training[0]=='')
 {
  ?>
  <script type="text/javascript">
  alert("write atleast 3 trainings or certificates");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
 elseif($training[1]=='')
 {
  ?>
  <script type="text/javascript">
  alert("write atleast 3 trainings or certificates");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
 elseif($training[2]=='')
 {
  ?>
  <script type="text/javascript">
  alert("write atleast 3 trainings or certificates");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
else
 {
  ?>
  <script type="text/javascript">
  alert("fill up all the boxes");
  document.location.href="index.php?page=6";
  </script>
  <?php
 }
?>