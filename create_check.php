<?php
session_start();
$roll_no=$_SESSION['stud'];
require_once('connection/connection.php');

$roll=$_POST['roll'];
$password=$_POST['pass'];
$retype=$_POST['retype'];
$_SESSION['roll']=$roll;
$_SESSION['password']=$password;

$roll_array=mysql_query("select * from registration where roll_no='$roll_no'");
$roll_var=mysql_fetch_array($roll_array);
$roll_id=$roll_var['roll_no'];

if($roll!='' && $password!='' && $password == $retype && $roll!=$roll_id)
 { 
  $no=strlen($roll);
  $pass=strlen($password);
  if($no==5)
   {
     $lowercase=preg_match("#[a-z]+#",$password);
	 $uppercase=preg_match("#[A-Z]+#",$password);
	 $num=preg_match("#[0-9]+#",$password);
	 if($lowercase && $uppercase && $num && $pass>=6)
	      {
			mysql_query("insert into registration value('$roll','$password')");
			?>
			<script type="text/javascript">
			alert("Your account has been created successfully.");
			document.location.href="index.php?page=4";
			</script>
			<?php
		   }
	elseif($pass<6)
	      {
		   ?>
		  <script type="text/javascript">
		  alert("Your password is too weak!!");
		  document.location.href="index.php?page=7";
		  </script>
		  <?php
		  }
	else
	     {
		 	?>
			<script type="text/javascript">
			alert("password must contain atleast 1 lowercase 1 uppercase letter and 1 number");
			document.location.href="index.php?page=7";
			</script>
			<?php
         }
	}
  else{
	  ?>
	  <script type="text/javascript">
	  alert("enter your 7 digit valid roll number");
	  document.location.href="index.php?page=7";
	  </script>
	  <?php
      } 
}
elseif($password!=$retype)
 {
  ?>
  <script type="text/javascript">
  alert("enter password again!!");
  document.location.href="index.php?page=7";
  </script>
  <?php
 }
elseif($roll==$roll_id && $roll!='')
 {
  ?>
  <script type="text/javascript">
  alert("Your account is registered already");
  document.location.href="index.php?page=7";
  </script>
  <?php
}
elseif($password=='' && $roll!='')
 {
  ?>
  <script type="text/javascript">
  alert("enter your password!!");
  document.location.href="index.php?page=7";
  </script>
  <?php
 }
 elseif($retype!='' && $roll!='')
 {
  ?>
  <script type="text/javascript">
  alert("enter your password again!!");
  document.location.href="index.php?page=7";
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert("enter your details again!!");
  document.location.href="index.php?page=7";
  </script>
  <?php
 }
?>