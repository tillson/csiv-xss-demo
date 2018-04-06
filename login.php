<?php
require('header.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

   $username = $_POST['username'];
   $password = $_POST['password'];
   $query = "SELECT * FROM users WHERE username = '" . $username . "' and password = md5('" . $password . "');";
   $result = mysqli_query($db, $query);
   if (!$result) {
     die(mysqli_error($db));// . '<br><b>Query: </b>' . $query);
   }
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);

   if($count > 0) {
      $_SESSION['username'] = $username;
      header('Location: /app');
   } else {
     header('Location: /?error=invalid');
     die();
   }
}

?>
