<?php

session_start();
session_unset();
session_destroy();
// header("location: index.php");
echo
"<script>
     alert('Logout Successful');
     window.location.href = 'index.php';
</script>";

?>

<!-- ALTER TABLE `table` AUTO_INCREMENT = number;  //autoincrement reset -->