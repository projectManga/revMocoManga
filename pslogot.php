<?php
session_start();
?>
<?php
unset();
session_destroy();
header('Location: login.php');
?>
