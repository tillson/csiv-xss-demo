<?php
require('../header.php');
 ?>
<html>
  <head>
    <title>Signup for CycloneNet</title>
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
            <li class="nav-item">
              <a class="nav-link" href="/">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container" style="padding-top:30px;">
      <h1>Register</h1>
      <hr>
      <?php
      if ($_GET["signup"] == 'fields') {
        echo '<div class="alert alert-danger" role="alert">Please fill out all the fields.</div>';
      } else if ($_GET["signup"] == 'mismatch') {
        echo '<div class="alert alert-danger" role="alert">Password mismatch!</div>';
      } else if ($_GET["signup"] == 'exists') {
        echo '<div class="alert alert-danger" role="alert">A user with that username already exists.</div>';
      }

      ?>
      <div class="row">
        <div class="col-md-7 col-md-offset-5">
          <form method="post" action="./signup.php">
            <div class="form-group">
              <label for="fullName">Your Full Name</label>
              <input type="name" class="form-control" name="fullName" placeholder="John Appleseed">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="name" class="form-control" name="username" placeholder="theneedledrop">
            </div>
            <br>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-success">Finish</button>
          </form>
        </div>
      </div>
    </div>
    <footer>
      <hr>
    </footer>
  </body>
</html>
