<?php
require('../header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $fullName = htmlspecialchars($_POST["fullName"]);
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $cPassword = htmlspecialchars($_POST['confirmPassword']);

  if (!(isset($fullName)) || !(isset($username)) || !(isset($password)) || !(isset($cPassword))) {
    header('Location: /signup/?signup=fields');
  }
  if (strcmp($password, $cPassword) !== 0) {
    header('Location: /signup/?signup=mismatch');
  }


  $query = "SELECT * FROM users WHERE username = '" . $username . ";";
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if ($count == 0) {
    $query = "INSERT INTO users (full_name, username, password) VALUES ('$fullName', '$username', md5('$password'));";
    $result = mysqli_query($db, $query);
    session_start();
    $_SESSION["username"] = $username;
    header('Location: /app/');
  } else {
    header('Location: /signup/?signup=exists');
  }
}

?>
