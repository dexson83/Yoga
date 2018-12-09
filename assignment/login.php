<html>
<head>
<title></title>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="footer.css"/>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<link type="text/css" rel="stylesheet" href="login.css"/>
<?php
	include('header.php');
?>



<div class="container"style="margin-top:10%;margin-bottom:5%">
  <div class="row">

    <div class="main">

      <h3>Please Log In, or <a href="register.php">Sign Up</a></h3>
      <div class="row">
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>

      <form role="form" action="loginU.php" method="post">
        <div class="form-group">
          <input type="text" name="email" class="form-control" id="inputUsernameEmail" placeholder="Email"/>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password"/>
		            <a class="pull-right" href="#">Forgot password?</a>
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-primary">
          Log In
        </button>
      </form>
    
    </div>
    
  </div>
</div>
<?php
	require('foot.html');

?>
</body>
</html>