<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Először be kell jelentkezned";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bejelentkezett</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
	<h2>Bejelentkezett</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Üdvözöljük <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="http://localhost/szaboger.github.io/githuby.html" style="color: green;">Tovább a főoldalra</a> </p>
        <p> <a href="index.php?logout='1'" style="color: red;">Kijelentkezés</a> </p>
        
    <?php endif ?>
</div>
		
</body>
</html>