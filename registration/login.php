<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('img/picture3.jpg');background-size: 100%; opacity: 0.76">
   
        
    
    <div class="header" style="background-color:rgb(35, 35, 36);">
    	<h2>Login</h2>
    </div>
  	 
    <form method="post" action="login.php">
    	<?php include('errors.php'); ?>
    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username">
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password">
    	</div>
    	<div class="input-group">
    		<button type="submit" class="btn" name="login_user" style="background-color:rgb(35, 35, 36);">Login</button>
    	</div>
    	<p>
    		Not yet a member? <a href="register.php">Sign up</a>
    	</p>
    </form>
  
</body>
</html>