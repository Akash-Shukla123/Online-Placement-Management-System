<?php
session_start();
require_once('connection/connection.php');

$user=$_POST['user'];
$password=$_POST['password'];

$db_array=mysql_query('select * from admin_login');
$db_variable=mysql_fetch_array($db_array);

$db_user=$db_variable['user_id'];
$db_password=$db_variable['password'];

if($user == $db_user && $password == $db_password && $user!='' && $password!='')
 {
  $_SESSION['admin']=$user;
  ?>
  <script type="text/javascript">
  alert("login successfully");
  document.location.href="admin/index.php";
  </script>
  <?php
  }
 else
 {
 ?>
 <script type="text/javascript">
 alert("login failed!!  try again!!");
 document.location.href="index.php?page=5";
 </script>
 <?php
 }
?>