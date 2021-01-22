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
}
$email =$_POST['email'];
$username =$_POST['username'];
$password =$_POST['password'];

$email = stripcslashes($email);
$username = stripcslashes($username);
$password = stripcslashes($password);

$sql = "INSERT INTO account(email, username, password) VALUES ('$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
  header("location:login.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>