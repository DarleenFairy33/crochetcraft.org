<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "form";
  $conn = "";

  try{
    $conn = mysqli_connect(hostname: $db_server, username: $db_user, password: $db_pass, database: $db_name);
  }
  catch(mysqli_sql_exception){
    echo "Connection Error<br>";
  }
?>