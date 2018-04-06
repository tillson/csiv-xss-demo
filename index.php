<?php
require('header.php');
 ?>
<html>
  <head>
    <title>CycloneNet</title>
    <link rel="stylesheet" href="/assets/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/custom.css" type="text/css">
    <script src="/assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
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
            <li class="nav-item active">
              <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/signup">Register <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container" style="padding-top:30px;">
      <h1>CycloneNet</h1>
      <i>a very secure social network</i>
      <hr>
      <?php if (isset($_GET['error'])) { echo "<b>Invalid password!</b>"; } ?>
      <div class="row">
        <div class="col-md-7 col-md-offset-5">
          <form method="post" action="login.php">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn pg-color">Login</button>
            <br>or <a href="/signup">Sign Up</a>
          </form>
        </div>
      </div>
    </div>
    <footer>
      <hr>
    </footer>
  </body>
</html>
