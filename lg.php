<?php
session_start();
$_SESSION['username']='';
unset($_SESSION['username']);
session_destroy();
session_write_close();
header('Location: login.php');
die;
?>
