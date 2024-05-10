<?php

session_start();
session_unset();
session_destroy();
header("location: index.php");

?>

<!-- ALTER TABLE `table` AUTO_INCREMENT = number;  //autoincrement reset -->