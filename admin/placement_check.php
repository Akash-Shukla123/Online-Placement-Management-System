<?php
session_start();
require_once('connection/connection.php');

$a=$_POST['submit'];
if(isset($a))
{
	echo $roll=$_POST['roll'];
	echo $cid=$_POST['c_id'];
	$year=$_POST['year'];
	
	echo $sid=$_SESSION['c_id'];
	echo $sid1=$_SESSION['roll_no'];
	
	$array1=mysql_query("select * from placement_detail where roll_no='$roll' ");
	$var=mysql_fetch_array($array1);
	$db_roll=$var['roll_no'];
	
	$r=strlen($roll);
	if($sid!='' && $sid1!='' && $r==5)
	 {
	  mysql_query("update placement_detail set roll_no='$roll', c_id='$cid', year='$year' where roll_no='$sid1' && c_id='$sid' ");
	  ?>
	  <script type="text/javascript">
	  alert("updated successfully");
	  document.location.href="index.php?page=3";
	  </script>
	  <?php
	 }
	 elseif($r>5 || $r<5)
	 {
	 ?>
	 <script type="text/javascript">
	 alert("Re-enter roll no.");
	 document.location.href="index.php?page=3";
	 </script>
	 <?php
	 }
	 else
	 	{
				if($roll!='' && $cid!='' && $roll!=$db_roll && $r == 5 )
					 {
							  mysql_query("insert into placement_detail values('','$roll','$cid','$year') ");
							  ?>
							  <script type="text/javascript">
							  alert("submitted successfully");
							  document.location.href="index.php?page=3";
							  </script>
							  <?php
						}
				elseif($roll == $db_roll)
					 {
					 ?>
					 <script type="text/javascript">
					 alert("roll no. already exists");
					 document.location.href="index.php?page=3";
					 </script>
					 <?php
					 }
				elseif($r>5 || $r<5)
					 {
					 ?>
					 <script type="text/javascript">
					 alert("Re-enter roll no.");
					 document.location.href="index.php?page=3";
					 </script>
					 <?php
					 }
				else
					{
					 ?>
					 <script type="text/javascript">
					 alert("enter details again");
					 document.location.href="index.php?page=3";
					 </script>
					 <?php
					 }
				}
}
else{}

$b=$_POST['check'];
if(isset($b))
{
 $branch=$_POST['branch'];
 $year1=$_POST['year1'];
 
 $query1=mysql_query("select * from details where branch='$branch' && year_pass='$year1' ");
 $var1=mysql_fetch_array($query1);
 echo $db_br=$var1['branch'];
 echo $db_y=$var1['year_pass'];
 
 $query2=mysql_query("select * from placement_detail where year='$year1' ");
 $var2=mysql_fetch_array($query2);
 echo $db_yr=$var2['year'];
 
if($db_y == $db_yr && db_y==true)
 {
 if($branch!='' && $year1!='' && $year1==$db_yr && $branch==$db_br)
   {
    $_SESSION['br']=$branch;
	$_SESSION['yr']=$year1;
	?>
    <script type="text/javascript">
    document.location.href="index.php?page=3";
    </script>
    <?php
   }
  elseif($year1!=$db_yr && $branch!=$db_br)
  {
  ?>
  <script type="text/javascript">
  alert("file not found");
  document.location.href="index.php?page=3";
  </script>
  <?php
  }
  else
  {
  ?>
  <script type="text/javascript">
  alert("enter details again");
  document.location.href="index.php?page=3";
  </script>
  <?php
  }
 }
 elseif($db_y != $db_yr && db_y==true) 
{
 ?>
  <script type="text/javascript">
  alert("placement not found");
  document.location.href="index.php?page=3";
  </script>
  <?php
 }
else
{
 ?>
  <script type="text/javascript">
  alert("file not found");
  document.location.href="index.php?page=3";
  </script>
  <?php
 }
}
else{}
?>