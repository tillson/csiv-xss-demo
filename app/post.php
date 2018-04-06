<?php require_once('../header.php');
if (!$_SESSION['username']) {
  header('Location: /');
  die();
}

$user = $_SESSION['username'];
$postText = $_POST['postText'];
$query = "INSERT INTO posts (poster, text) VALUES ('$user', '$postText');";
$result = mysqli_query($db, $query);
header('Location: /app/profile');

?>
