<?php
	include('connect.php');
	$username = $_POST['UN2'];
	$password = $_POST['PW2'];

	$conn = new mysqli(hostname: "localhost",username: "root",password: "",database: "form");

	if($conn->connect_error){
		die("Failed to connect: ".$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare(query: "SELECT * FROM login_tbl where username = ?");
		$stmt -> bind_param("s", $username);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows >0 ){

		}
		else{
			echo '<script>alert("Incorrect username or password!")</script>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Londrina+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Home</title>
  </head>
  <body>
    <header>
      <h1>Welcome To crochetcraft.org</h1>
      <p>The land of crochet & craft!</p>
    </header>
    <div class="signinup">
      <div id="main">
        <button action="forms.php" class="openbtn"  onclick="openNav(), snd.play()">&#9776; Sidebar</button>
        <audio>
          <source src="click.mp3" type='audio/mpeg;'>
       </audio>
      </div>
      <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn"  onclick="closeNav(), snd.play()"> &times; </a>
          <br>
        <a href="contact.html">Contact Site Mods or a Dev!</a>
          <br>
        <a href="report.html">Report a bug/glitch</a>
          <br>
        <a href="dash.html">Dashboard (Login To Use)</a>
        <audio>
          <source src="click.mp3" type='audio/mpeg;'>
       </audio>
      </div>
      <div class="COLUMN">
        <h2>Sign Up</h2>
          <form action="register.php" method="post">
            <label>First Name:</label>
            <input required type="text" placeholder="First Name" id="FN" name="first_name">
              <br>
              <br>
            <label>Email Address</label>
            <input required type="email" placeholder="Email" id="EM" name="email">
              <br>
              <br>
            <label>Username</label>
            <input required type="text" placeholder="Username" id="UN" name="username">
              <br>
              <br>
            <label>Make A Password</label>
            <input required type="password" placeholder="Password" id="PW" name="password">
              <br>
              <br>
            <input type="submit" id="SM" name="submit">
          </form>
      </div>
      <div class="COLUMN">
        <h2>Sign In</h2>
        <form action="login.php" method="post">
          <label>Username</label>
          <input required type="text" placeholder="Username" id="UN2" name="UN2">
            <br>
            <br>
          <label>Password</label>
          <input required type="password" placeholder="Password" id="PW2" name="PW2">
            <br>
            <br>
          <input type="submit" id="SM2" name="submit">
        </form>
      </div>
    </div>
  </body>
  <script src="scripts.js"></script>
  <script src="login.js"></script>
  <script src="signup.js"></script>
</html>
