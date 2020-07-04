<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sasdbejelentkezés</title>
</head>
<body>
    
</body>
</html>





<?php

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$con=mysqli_connect("localhost", "root", "", "login");
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);
mysqli_select_db($con, 'login');
$result = mysqli_query($con, "select * from users where username = '$username' and password = '$password'") or die (mysqli_error($con));
$row = mysqli_fetch_array($result);
if (($row['username'] == $username) && ($row['password'] == $password)) {
     
   
    echo "<script>
window.location.href='http://localhost/szaboger.github.io/githuby.html';
alert('Sikeres bejelentkezés');
</script>";
  
}
else {
   
     
    echo "<script>
    window.location.href='http://localhost/login%20test/login.php';
    alert('Sikertelen bejelentkezés');
    </script>";
}

?>