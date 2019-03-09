<?php
require_once('connection/connection.php');
session_start();
$sid=$_GET['sid'];
$_SESSION['sid']=$sid;

$ar=mysql_query("select * from company where c_id='$sid' ");
$vr=mysql_fetch_array($ar);
$cid=$vr['c_id'];
$cn=$vr['c_name'];
$cg=$vr['cgpa'];
$rec=$vr['no_rec']; 
?>

<html>
<head>
<link href="company_css.css" rel="stylesheet" type="text/css">
<title>admin login</title>
<body class="body">
<h3 align="center" id="comp">COMPANY DETAILS</h3><br>
<h3 align="center" id="comp"><?php echo $cn; ?></h3><br><br><br><br>
<form action="company_check.php" enctype="multipart/form-data" method="post">
COMPANY NAME:
<input type="text" name="name" id="name" placeholder="enter company name" value="<?php echo $cn; ?>"><br><br><br>
CGPA CRITERIA:
<input type="text" id="cgpa" name="cgpa" placeholder="Enter cgpa criteria" maxlength="4" value="<?php echo $cg ?>"/><br><br><br>
NUMBER OF RECRUITERS:
<input type="text" id="rec" name="rec" placeholder="Enter no. of recruiters" value="<?php echo $rec; ?>"/><br><br><br>

<input type="submit" id="submit" name="submit" value="SUBMIT" /><br><br><br><br>

<input type="text" name="search" id="search" placeholder="search....">
<input type="submit" id="search1" name="search1" value="SEARCH" />
</form>
<table border="2" bordercolor="#003366" height="10%" width="100%">
<tr> <td align="center">SL NO.</td>
     <td align="center" width="30%">Company Name</td>
	 <td align="center">CGPA Criteria</td>
	 <td align="center">No. Of Recruiters</td>
	 <td align="center" colspan="2">ACTION</td>
<?php
session_start();
require_once('connection/connection.php');
$nm=$_SESSION['name1'];
	if($nm!='')
	 {
	 $array1=mysql_query("select * from company where c_name='$nm' ");
	 $var1=mysql_fetch_array($array1);
	    
	            $c_id=$var1['c_id'];
				$n1=$var1['c_name'];
				$cgpa1=$var1['cgpa'];
				$no1=$var1['no_rec'];
				echo"<tr>
				  <td align='center'>1.</td>
				  <td align='center'>$n1</td>
				  <td align='center'>$cgpa1</td>
				  <td align='center'>$no1</td>
				   <td align='center'><a href='?page=2&sid=$c_id'>UPDATE</a></td>
				   <td align='center'><a href='company_delete.php?sid=$c_id'>DELETE</a></td>";
	  }
else{
	
     $array=mysql_query('select * from company');
	 $t=1;
	 while($var=mysql_fetch_array($array))
	   {   
			$c_id=$var['c_id'];
			$n=$var['c_name'];
			$cgpa=$var['cgpa'];
			$no=$var['no_rec'];
			echo"<tr>
			  <td align='center'>$t</td>
			  <td align='center'>$n</td>
			  <td align='center'>$cgpa</td>
			  <td align='center'>$no</td>
			   <td align='center'><a href='?page=2&sid=$c_id'>UPDATE</a></td>
			   <td align='center'><a href='company_delete.php?sid=$c_id'>DELETE</a></td>";
	 $t++;
    }
 }
?>
</table>
</body>
</head>
</html>