<?php
require_once('connection/connection.php');
$sid=$_GET['sid'];
$sid1=$_GET['sid1'];
mysql_query("delete from placement_detail where roll_no='$sid1' && c_id='$sid' "); 
?>
<script type="text/javascript">
confirm("Are you sure you want to delete");
document.location.href="index.php?page=3";
</script>