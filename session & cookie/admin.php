


<?php

session_start();

if (!isset($_SESSION['email']) && !isset($_COOKIE['click'])){
    header("location: index.php");
}

$email = isset($_SESSION['email']) ? $_SESSION['email'] : "";
$password = isset($_SESSION['password']) ? $_SESSION['password'] : "";
$click = isset($_POST['click']) ? $_POST['click'] : "";



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

    <br>
    cookie: <?php echo $_COOKIE['click']; ?>

    <h4><a href="logout.php">Logout</a></h4>


</body>

</html>