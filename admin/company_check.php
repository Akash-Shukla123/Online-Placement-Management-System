<?php
session_start();
require_once('connection/connection.php');
$a=$_POST['submit'];
if(isset($a))
 {
	$c_name=$_POST['name'];
	$c_cgpa=$_POST['cgpa'];
	$c_rec=$_POST['rec'];
	$s_id=$_SESSION['sid'];
	
	$array=mysql_query("select * from company where c_name='$c_name' ");
	$var=mysql_fetch_array($array);
	$db_name=$var['c_name'];
	
	$num=preg_match("#[0-9]+#",$c_rec);
	if($num)
	 {
	       if($s_id !='')
			  {
			   mysql_query("update company set c_name='$c_name',cgpa='$c_cgpa',no_rec='$c_rec' where c_id=$s_id ");
			   ?>
			   <script type="text/javascript">
			   alert("updated seuccessfully");
			   document.location.href="index.php?page=2";
			   </script>
			   <?php
			   }
			 else{
		            if($c_name!='' && $c_cgpa!='' && $c_rec!='' && $c_name!=$db_name)
		            {
				  mysql_query("insert into company values('','$c_name','$c_cgpa','$c_rec') ");
				  ?>
				  <script type="text/javascript">
				  alert("submitted successfully");
				  document.location.href="index.php?page=2";
				  </script>
				  <?php
			       }
			 
		elseif($c_name == $db_name)
		 {
		 ?>
		 <script type="text/javascript">
		 alert("company name already exists!!");
		 document.location.href="index.php?page=2";
		 </script>
		 <?php
		 }
	    else
		 {
		 ?>
		 <script type="text/javascript">
		 alert("enter details again");
		 document.location.href="index.php?page=2";
		 </script>
		 <?php
		 }
	  }
  }
  else{
		 ?>
		 <script type="text/javascript">
		 alert("enter details again");
		 document.location.href="index.php?page=2";
		 </script>
		 <?php
	 }
}
else{}

$b=$_POST['search1'];
if(isset($b))
{
	echo $name1=$_POST['search'];
	
	$db_array1=mysql_query("select * from company where c_name='$name1' ");
	$db_variable1=mysql_fetch_array($db_array1);
	$db_name1=$db_variable1['c_name'];
	
	if($name1 == $db_name1 && $name1!='')
	 {
	   $_SESSION['name1']=$name1;
	   ?>
	   <script type="text/javascript">
	   document.location.href="index.php?page=2";
	   </script>
	   <?php
	  }
	 elseif($name1!=$db_name1 && $name1!='')
	 {
	 ?>
	 <script type="text/javascript">
	 alert("file not found");
	 document.location.href="index.php?page=2";
	 </script>
	 <?php
	 }
	 else
	 {
	 ?>
	  <script type="text/javascript">
	 alert("enter details!!");
	 document.location.href="index.php?page=2";
	 </script>
	 <?php
	 }
}
else{}
?>