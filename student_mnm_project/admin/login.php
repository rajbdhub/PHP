<?php
require_once 'dbcon.php';


if (isset($_SESSION['user_login'])){
    header("location: index.php");
}

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username_check = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username'");

    if (mysqli_num_rows($username_check) == 1){

            $scrap_alldata = mysqli_fetch_assoc($username_check);

            if ($scrap_alldata['password'] == md5($password)){
                if ($scrap_alldata['status']==1){

                    $_SESSION['user_login'] = $username;

                    header('location: index.php');
                } else{
                    $status_error = "You are inactive user. Please contact with us!";
                }
            }else{
                $password_error = "Information not matched!";
            }
    }else{
        $login_error = "Information not matched!";
}
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Student Management Project</title>
  </head>
  <body>

    <div class="container animate__animated animate__fadeInDown">
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary mt-3" href="../index.php">Back</a>
        </div>
        <h2 class="text-center mt-5">Student Management System</h2>
        <div class="row">
            <div class="col-sm-4 offset-4 mt-5">
                <form action="" method="post">
                    <table class="table table-bordered">
                        <div>
                            <h3 class="text-center">Admin Login Form</h3>
                        </div>
                       <div>
                           <input type="text" name="username" required class="form-control" placeholder="Username" value="<?= isset($username) ? $username : "" ?>">
                       </div>
                        <br>

                        <div>
                            <input type="password" placeholder="Password"  required name="password" class="form-control" value="<?= isset($password) ? $password : "" ?>">
                        </div>
                        <div class="text-right">
                            <a href="">Forgot password?</a>
                        </div>
                        <span class="text-danger"><?= isset($login_error)? $login_error: ""?> </span>
                        <span class="text-danger"><?= isset($password_error)? $password_error: ""?> </span>
                        <span class="text-danger"><?= isset($status_error)? $status_error: ""?> </span>

                        <br>

                        <div class="d-flex justify-content-center">
                            <input class="custom-btn btn login" type="submit" value="Login" name="login">
                        </div>

                    </table>
                </form>
            </div>
        </div>
    </div>
  
  </body>
</html>