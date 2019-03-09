<?php
session_start();
require_once('connection/connection.php');

$branch=$_POST['branch'];
$year=$_POST['year'];

$db_array1=mysql_query("select * from details where branch='$branch' && year_pass='$year' ");
$db_variable1=mysql_fetch_array($db_array1);

$db_branch=$db_variable1['branch'];
$db_year=$db_variable1['year_pass'];

if($branch == $db_branch && $year == $db_year && $branch!='' && $year!='')
 {
  $_SESSION['branch']=$branch;
  $_SESSION['year']=$year;
  ?>
  <script type="text/javascript">
  document.location.href="index.php?page=1";
  </script>
  <?php
  }
 else
 {
 ?>
 <script type="text/javascript">
 alert("file not found");
 document.location.href="index.php?page=1";
 </script>
 <?php
 }
?>