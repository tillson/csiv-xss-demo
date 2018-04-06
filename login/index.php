<html>
  <head>
    <title>Login to Manage</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <script src="/assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container" style="padding-top:30px;">
      <div class="container" style="padding-top:30px;">
        <h1>Login to Manage</h1>
        <hr>
        <div class="row">
          <div class="col-md-4 col-md-offset-5">
            <form method="post" action="manage/login.php">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="name" class="form-control" id="username" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-success">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
