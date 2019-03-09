<?php
session_start();
require_once('connection/connection.php');

$a=$_POST['submit2'];
if(isset($a))
  {
	$current=$_POST['current'];
	$new=$_POST['new'];
	$retype=$_POST['retype'];
	
	$array3=mysql_query("select * from  admin_login where password='$current' ");
	$var3=mysql_fetch_array($array3);
	$db_pass=$var3['password'];
	$db_user=$var3['user_id'];
	
	if($current!='' && $new!='' && $retype!='' && $current==$db_pass && $new!=$current && $new==$retype)
	  {
	   mysql_query("delete from admin_login where user_id='$db_user' ");
	   mysql_query("insert into admin_login values('','$db_user','$new') ");
		?>
		<script type="text/javascript">
		alert("password changed successfully");
		document.location.href="index.php?page=4";
		</script>
		<?php
	  }
	elseif($current!=$db_pass && $current!='' && $new!='' && $retype!='') 
	  {
		 ?>
		<script type="text/javascript">
		alert("retype your current password again");
		document.location.href="index.php?page=4";
		</script>
		<?php
	  }
	elseif($current==$new && $current!='' && $new!='' && $retype!='') 
	  {
		 ?>
		<script type="text/javascript">
		alert("insert your new password ");
		document.location.href="index.php?page=4";
		</script>
		<?php
	  }
	elseif($current!='' && $new!='' && $retype!='' && $current==$db_pass && $new!=$current && $new!=$retype) 
	  {
		 ?>
		<script type="text/javascript">
		alert("retype your new password");
		document.location.href="index.php?page=4";
		</script>
		<?php
	  }
	else
	{
		 ?>
		<script type="text/javascript">
		alert("enter your password details!!");
		document.location.href="index.php?page=4";
		</script>
		<?php
      }
}
else{}

session_start();
$b=$_POST['submit1'];
if(isset($b))
 {
	require_once('connection/connection.php');
	
	$current=$_POST['user'];
	$new=$_POST['new_user'];
	
	$query=mysql_query("select * from admin_login where user_id='$current' ");
	$array=mysql_fetch_array($query);
	$db_user=$array['user_id'];
	$db_pass=$array['password'];
	
	if($current!='' && $new!='' && $current==$db_user && $new!=$current)
		{
		 mysql_query(" delete from admin_login where user_id='$current' ");
		 mysql_query("insert into admin_login values('','$new','$db_pass') ");
		 ?>
		 <script type="text/javascript">
		 alert("user id has been changed sucessfully");
		 document.location.href="index.php?page=4";
		 </script>
		 <?php
		}
	elseif($current!='' && $new!='' && $current!=$db_user)
	   {
		?>
		 <script type="text/javascript">
		 alert("user id not found");
		 document.location.href="index.php?page=4";
		 </script>
		 <?php
		}
	elseif($current!='' && $new!='' && $current==$new)
	 {
		?>
		 <script type="text/javascript">
		 alert("enter new user-id");
		 document.location.href="index.php?page=4";
		 </script>
		 <?php
		}
	else
	 {
		?>
		 <script type="text/javascript">
		 alert("enter user-id details");
		 document.location.href="index.php?page=4";
		 </script>
		 <?php
		}
 }
else{}
?>