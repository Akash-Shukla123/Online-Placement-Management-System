<?php
session_start();
require_once('connection/connection.php');

$user=$_POST['roll'];
$password=$_POST['pass'];

$db_array=mysql_query("select * from registration where roll_no='$user' && password='$password'");
$db_variable=mysql_fetch_array($db_array);

$db_user=$db_variable['roll_no'];
$db_password=$db_variable['password'];

if($user == $db_user && $password == $db_password && $user!='' && $password!='')
 {
  $_SESSION['stud']=$user;
  ?>
  <script type="text/javascript">
  alert("login successfully");
  document.location.href="index.php?page=6";
  </script>
  <?php
  }
 else
 {
 ?>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
 <script type="text/javascript">
 function a(){
 swal("oops");
 document.location.href="index.php?page=4";
 
 </script>
 <?php
 }
?>