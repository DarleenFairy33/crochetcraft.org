<?php 
session_start();

	include("connection.php");
	include("functions.php");
	include("index.html");

	$user_data = check_login($con);

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
    <title>Home</title>
  </head>
  <body>
    <header>
      <h1>Welcome To crochetcraft.org</h1>
      <p>The land of crochet & craft!</p>
      <a href="signup.php">Sign Up!</a>
      <a href="login.php">Log In!</a>
    </header>
    <div class="signinup">
      <div id="main">
        <button class="openbtn"  onclick="openNav(), snd.play()">&#9776; Sidebar</button>
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
        <audio>
          <source src="click.mp3" type='audio/mpeg;'>
       </audio>
      </div>
      <div class="COLUMN">
        <h2>Sign Up</h2>
          <form>
            <label>First Name:</label>
            <input required type="text" placeholder="First Name" id="FN">
              <br>
              <br>
            <label>Email Address</label>
            <input required type="email" placeholder="Email" id="EM">
              <br>
              <br>
            <label>Username</label>
            <input required type="text" placeholder="Username" id="UN">
              <br>
              <br>
            <label>Make A Password</label>
            <input required type="password" placeholder="Password" id="PW">
              <br>
              <br>
            <input type="submit" id="SM">
          </form>
      </div>
      <div class="COLUMN">
        <h2>Sign In</h2>
        <form>
          <label>Email Address</label>
          <input required type="text" placeholder="Username" id="UN2">
            <br>
            <br>
          <label>Password</label>
          <input required type="password" placeholder="Password" id="PW2">
            <br>
            <br>
          <input type="submit" id="SM2">
        </form>
      </div>
    </div>
  </body>
  <script src="script.js"></script>
  <script src="validation.js"></script>
</html>
