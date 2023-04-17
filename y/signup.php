
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="connect.php" method="post">
    <h3>Sign Up here</h3>
	
    <div class="form-item">
		<input type="text" name="user" id="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" id="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Sign up"></input>
    </div>
  </form>
  <div class="reminder">
    <p>Already have an account? <a href="/y/index.php">login here</a></p>
  </div>
</body>
</html>
