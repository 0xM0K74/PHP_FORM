<?php include("server.php"); ?>
<!DOCTYPE html>
<html>
  <head>
      <title>login form</title>
      <link href="style.css" rel="stylesheet">
  </head>
  <body>
      <div>
          <h2 class="header">Register</h2>
      </div>
      <form action="register.php" method="post" >
      <?php include("errors.php"); ?>

          <div class="input_group">
              <label>Username</label>
              <input type="text" name="username" value=<?php echo $username; ?>>
          </div>
          <div class="input_group">
              <label>Email</label>
              <input type="email" name="email" value=<?php echo $email; ?>>
          </div>
          <div class="input_group">
              <label>Password</label>
              <input type="password" name="password_1">
          </div>
          <div class="input_group">
              <label>Confirm Password</label>
              <input type="password" name="password_2">
          </div>
          <div class="input_group">
              <button name="register" class="btn">Register</button>
          </div>
          <p> Already a member? <a href="login.php">Sign In</a></p>
      </form>
  </body>
</html>