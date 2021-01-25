<?php 
session_start();
if(isset($_SESSION['email'])): ?>
    <li><a href="proses/pslogot.php">Logout</a></li>
<?php else: ?>
    <li><a href="../view/login.php">Login</a></li>
<?php endif; ?>