<?php 
session_start();
if(isset($_SESSION['email'])): ?>
    <li><a href="./pslogot.php">Logout</a></li>
<?php else: ?>
    <li><a href="./login.php">Login</a></li>
<?php endif; ?>