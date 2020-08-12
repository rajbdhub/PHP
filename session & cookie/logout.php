


<?php


session_start();
session_destroy();

unset($_COOKIE['click']);

setcookie(click, $email, time()+(60*24) );

header("location: index.php");

?>