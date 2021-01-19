<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['email']='';
    unset($_SESSION['email']);
    session_destroy();
    session_write_close();
    header('Location: login.php');
    die;
}
?>
