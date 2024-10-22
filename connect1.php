<?php

// password_hash(password: $password, algo: PASSWORD_BCRYPT);
// password_verify(password: $password, hash: $password);


if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
  header("Location: /");
};
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "darleen";
  

$conn = new mysqli(hostname: $host, username: $username, password: $hashed_password, database: $database);

if ($conn->connect_error){
  die ("Connection Failed." .$conn->connect_error);
}

if(!isset($_POST['FN']) || !isset($_POST['EM']) || !isset($_POST['UN']) || !isset($_POST['PW'])) {
    header(header: "Location: /");
    echo ":p";
    die();
}

$first_name = $_POST['FN'];
$email = $_POST['EM'];
$username = $_POST['UN'];
$password = $_POST['PW'];
$hashed_password = password_hash(password: $password, algo: PASSWORD_DEFAULT);

$sql = "INSERT INTO sugnup_tbl (first_name, email, username, password) VALUES ('$first_name', '$email', '$username', '$hashed_password')"; // pls do an anti sql injection and hash passwords
if ($conn->query(query: $sql)=== TRUE) {
  echo "Signed Up Successfully! Please use your new User & pass to access the platform!";
}
else{
  echo "Error: ".$sql. "<br>" .$conn->error;
}