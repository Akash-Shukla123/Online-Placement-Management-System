<?php
require_once('connection/connection.php');
$sid=$_GET['sid'];
mysql_query("delete from company where c_id='$sid' ");
?>
<script type="text/javascript">
confirm("are you sure you want to delete");
document.location.href="index.php?page=2";
</script>