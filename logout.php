<?php
session_start();
// if(!isset($_SESSION['loggedin']) OR $_SESSION['loggedin'] != true){
//     header("location : loin.php");
//     exit();
// }

session_unset();
session_destroy();

header ("location: login.php");
exit();
?>