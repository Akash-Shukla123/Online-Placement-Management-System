<?php
require_once('connection/connection.php');
$del_id=$_GET['del_id'];
mysql_query("delete from details where roll_no='$del_id' ");
?>
<script type="text/javascript">
document.location.href="index.php?page=1";
</script>