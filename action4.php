<?php
 $path = 'registration.txt';
 if (isset($_POST['emailreg']) && isset($_POST['passwordreg']) && isset($_POST['passwordagain']))  {
    $fh = fopen($path,"a+");
    $string = $_POST['emailreg'].' - '.$_POST['passwordreg'] .' - '.$_POST['passwordagain'] ;
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
 
    header("Location: http://localhost/githuby.html"); /* Redirect browser */
    

?>