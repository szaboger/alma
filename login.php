<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Bejelentkezés</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="header">
  	<h2>Bejelentkezés</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Felhasználónév</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Jelszó</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Bejelentkezés</button>
  	</div>
  	<p>
  		Még nem regisztrált? <a href="register.php">Regisztráció</a>
  	</p>
  </form>
</body>
</html>