<?php
session_start();
session_unset();
?>
<script type="text/javascript">
alert("logout successfully");
document.location.href="http://localhost/placement?page=5";
</script>