


<?php

session_start();

if (!isset($_SESSION['email'])){
    header("location: index.php");
}

$email = isset($_SESSION['email']) ? $_SESSION['email'] : "";
$password = isset($_SESSION['password']) ? $_SESSION['password'] : "";



?>


<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>

<body>
    <h3>Welcome to the admin page!</h3>
    Email: <?php echo $email; ?>
    <br>
    Password: <?php echo $password; ?>

    <h4><a href="logout.php">Logout</a></h4>


</body>

</html>