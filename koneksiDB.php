<?php

$email =$_POST['email'];
$password =$_POST['pass'];
$email = stripcslashes($email);
$password = stripcslashes($password);

$servername = "localhost";
$userdb = "mocomanga";
$pass = "mocomanga123";
$dbname = "mocomanga";

// Create connection
$conn = new mysqli($servername, $userdb, $pass, $dbname);
if (!$conn) {
	echo "connection failed";
}

$sql = "SELECT * FROM account WHERE email = '$email' AND password = '$password' LIMIT 1 ";
$result = mysqli_query($conn,$sql);
if (!empty($result)) {	
	if (mysqli_num_rows($result) == 1) {
		$db = "SELECT username FROM account WHERE email = '$email'";
		$res =mysqli_query($conn,$sql);
		$dat = mysqli_fetch_assoc($res);
		//Get data from database
		$username = $dat['username'];
		//$id_manga = $dat['id_manga'];
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['username'] = $username;
		//$_SESSION['id_manga'] = $id_manga;
		header("location: indexlogged.php");
		exit();
	}
}else{
	echo "Failed";
}

?>