<?php

$servername = "localhost";
$userdb = "mocomanga";
$pass = "mocomanga123";
$dbname = "mocomanga";


// Create connection
$conn = new mysqli($servername, $userdb, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}else{
	echo "terkoneksi";

	$email = $_POST['email'];
	$password = $_POST['pass'];
	
	$email = stripcslashes($email);
	$password = stripcslashes($password);

	$query = "SELECT * FROM account WHERE email = '$email' AND password = '$password' ";
	//$cek = $conn-> query($query);
	//$row=$cek-> fetch_assoc();
	if($row == 0) {
		header("location : login.php");
	}else{
		session_start();
		$_SESSION['email'] = $row['email'];

		header("location : ../index.php");
	}
}
?>