<?php
 $path = 'order.txt';
 if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['adress']) && isset($_POST['db']) && isset($_POST['burger']) && isset($_POST['extra']) && isset($_POST['info'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['email'].' - '.$_POST['name'] .' - '.$_POST['adress'] .' - '.$_POST['db'] .' - '.$_POST['burger'] .' - '.$_POST['extra'] .' - '.$_POST['info'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
 
    header("Location: http://localhost/githuby.html"); /* Redirect browser */
    

?>