<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "darleen";

$conn = new mysqli(hostname: $host, username: $username, password: $password, database: $database);

if ($conn->connect_error){
  die ("Connection Failed." .$conn->connect_error);
}
// check if they are defined or not
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM sugnup_tbl WHERE username='$username' AND password='$password'";
if (count($conn->query($sql)->fetch_all())===1) {
  echo "Logged In Successfully!";
}
else{
  echo "invalid login :(";
}