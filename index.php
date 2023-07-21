<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <img src="assets/nda.png" width="150px" height="130px">
  <div class="login">
    <h1>Login Panel</h1>
    <form method="post" action="login.php">
      <p><input type="text" name="uname" value="" placeholder="Username"></p>
      <p><input type="password" name="pword" value="" placeholder="Password"></p>
      <p class="remember_me">
        <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          Remember me on this computer
        </label>
      </p>
      <p class="submit"><input type="submit" name="submit" value="Login"></p><!--on name, removed commit and placed submit-->
    </form>
  </div>

</body>
</html>
