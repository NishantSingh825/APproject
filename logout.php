<?php 
session_start();
session_destroy();
header("Location: /new project\login.php");
exit();
?>