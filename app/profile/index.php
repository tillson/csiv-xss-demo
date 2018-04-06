<?php require_once('../../header.php');
if (!$_SESSION['username']) {
  header('Location: /');
  die();
}
?>
<html>
  <head>
    <title>CycloneNet</title>
    <link rel="stylesheet" href="/assets/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/custom.css" type="text/css">
    <script src="/assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="/assets/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="bs-component">
      <nav class="navbar navbar-expand-lg navbar-dark pg-color">
        <a class="navbar-brand" href="#">CycloneNet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/app/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/app/profile">My Profile <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="get" action="/app/profile/">
            <input class="form-control mr-sm-2" name="user" type="text" placeholder="Search">
            <button class="btn my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <div class="container" style="padding-top:30px;">
      <?php if (!isset($_GET["user"]) || $_GET["user"] == 'index.php') { ?>
        <h1>My Profile</h1>
        <hr>
        <h4>New Post</h4>
        <form method="post" action="../post.php">
          <div class="form-group">
            <textarea class="form-control" name="postText" placeholder="Type your post..."></textarea>
          </div>
          <button type="submit" class="btn pg-color">Post</button>
        </form>
        <hr>
        <h4>Your Recent Posts</h4>
        <table class="table table-bordered">
        <?php
          $query = "SELECT * FROM posts WHERE poster = '" . $_SESSION['username'] . "';";
          $result = mysqli_query($db, $query);
          if (!$result) {
            die(mysqli_error($db));
          }
          $posts = array();
          while($row = mysqli_fetch_assoc($result)) {
            $str = $row['text'];
            array_push($posts, $str);
          }
          $posts = array_reverse($posts);
          foreach($posts as $post) {
            echo "<tr><td>" . $post . "</td></tr>";
          }
        ?>
        </table>
      <?php } else { ?>
        <h1><?php echo $_GET["user"] ?>'s Profile</h1>
        <hr>
        <h4><?php echo $_GET["user"] ?>'s Recent Posts</h4>
        <table class="table table-bordered">
        <?php
          $query = "SELECT * FROM posts WHERE poster = '" . $_GET["user"] . "';";
          $result = mysqli_query($db, $query);
          if (!$result) {
            die(mysqli_error($db));
          }
          while($row = mysqli_fetch_assoc($result)) {
              $text = $row['text'];
              echo "<tr><td>" . $text . "</td></tr>";
          }
        ?>
        </table>
      <?php } ?>
      </div>
    </div>
    <footer>
      <hr>
    </footer>
  </body>
</html>
