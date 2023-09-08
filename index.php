<!--<!DOCTYPE html>
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
      <p class="submit"><input type="submit" name="submit" value="Login"></p>on name, removed commit and placed submit
    </form>
  </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'><link rel="stylesheet" href="stylee.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div id="login-box">
		<div class="logo">
      <img src="assets/nda.png" width="150px" height="130px" class="img img-responsive img-circle center-block">
			<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
		</div><!-- /.logo -->
		<div class="controls">    
      <form method="post" action="login.php">
        <p><input type="text" name="uname" value="" placeholder="Username" class="form-control"></p>
        <p><input type="password" name="pword" value="" placeholder="Password" class="form-control"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p><!--on name, removed commit and placed submit-->
        <button type="button" class="btn btn-default btn-block btn-custom">Login</button>
      </form>
		</div>
	</div>
</div>
<div id="particles-js"></div>
<!-- partial -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
<script src='https://code.jquery.com/jquery-1.11.1.min.js'></script><script  src="main/js/script.js"></script>

</body>
</html>
