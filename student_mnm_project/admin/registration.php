<?php
require_once 'dbcon.php';
if (isset($_POST['registration'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $c_password = md5($_POST['c_password']);
    $status = $_POST['status'];
    $photo = explode('.', $_FILES['photo']['name']);
    $photo =end($photo);
    $photo_name = $username.'.'.$photo;
    $error = array();
    if (empty($name)){
        $error['name'] = "This name field is required*";
    }
    if (empty($email)){
        $error['email'] = "This email field is required*";
    }
    if (empty($username)){
        $error['username'] = "This username field is required*";
    }
    if (empty($password)){
        $error['password'] = "This password field is required*";
    }
    if (empty($c_password)){
        $error['c_password'] = "This confirm password field is required*";
    }

    if (count($error) == 0){
         $link = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'");
        if (mysqli_num_rows($link) == 0){
            $user_link = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username'");
            if (mysqli_num_rows($user_link)== 0){
                if (strlen($username) >= 6){
                    if (strlen($password) >=6){
                        if ($password == $c_password){


                        $result = mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name', '$email', '$username', '$password', '$photo_name', '$status')");

                            if ($result){
                                move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo_name);
                                ?>
                                <script>
                                    alert('Registration successful!');
                                    window.location="registration.php";
                                </script>

                            <?php }
                            ?>
                                <script>
                                    alert('Registration not successful!');
                                    window.location="registration.php";
                                </script>
                            <?php
                        }else{
                            $password_match = "Confirm password not matched!";
                        }
                    } else{
                        $password_length = "Must be in 6 characters or more!";
                    }
                }else{
                    $username_length = "Must be in 6 characters or more!";
                }
            }else{
                $user_error = "This username is already exists!";
            }
        } else {
            $email_error = "This email is already exists!";
        }
    }
    //$sql = mysqli_query($conn, "INSERT INTO `studentinfo`(`name`, `roll`, `class`, `city`, `parentscontact`, `photo`, `datetime`) VALUES ()");
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="stylesheet" href="../css/style.css">

    <title>Student Management Project</title>
  </head>
  <body>

    <div class="container animate__animated animate__backInUp">
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary mt-3" href="../index.php">Back</a>
        </div>

        <h2 class="text-center">User Registration Form</h2>

        <hr>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal offset-1 pl-5">
                    <div class="form-group d-inline m-0">
                        <label class="control-label col-sm-1" for="name">Name:</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="name" placeholder="Enter your name" id="name" value="<?= isset($name) ? $name : '' ?>">
                        </div>
                    </div>
                    <label class="error text-danger pl-3 font-weight-bold"><?php if (isset($error['name'])){
                            echo $error['name'];
                        } ?>
                    </label>

                        <div class="form-group m-0">
                            <label class="control-label col-sm-1" for="email">Email:</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="email" name="email" placeholder="Enter your Email" id="email" value="<?= isset($email) ? $email : '' ?>" >
                        </div>
                        </div>
                            <label class="error text-danger pl-3 font-weight-bold"><?php if (isset($error['email'])){
                                    echo $error['email'];
                                } ?>
                            </label>

                            <label class="error text-danger font-weight-bold"><?php if (isset($email_error)){
                                    echo $email_error;
                                } ?>
                            </label>

                        <div class="form-group m-0">
                                <label class="control-label col-sm-1" for="username">Username:</label>
                        <div class="col-sm-4">
                                <input class="form-control" type="text" name="username" placeholder="Enter your Username" id="username" value="<?= isset($username) ? $username : '' ?>">
                        </div>
                        </div>
                                <label class="error text-danger pl-3 font-weight-bold"><?php if (isset($error['username'])){
                                        echo $error['username'];
                                    } ?>
                                </label>
                                <label class="error text-danger font-weight-bold"><?php if (isset($user_error)){
                                        echo $user_error;
                                    } ?>
                                </label>
                                <label class="error text-danger font-weight-bold"><?php if (isset($username_length)){
                                        echo $username_length;
                                    } ?>
                                </label>
                        <div class="form-group m-0">
                                <label class="control-label col-sm-1" for="password">Password:</label>
                                <div class="col-sm-4">
                                <input class="form-control" type="password" name="password" placeholder="Enter your Password" id="password" value="<?= isset($password) ? $password : '' ?>">
                        </div>
                        </div>
                                <label class="error text-danger pl-3 font-weight-bold"><?php if (isset($error['password'])){
                                        echo $error['password'];
                                    } ?>
                                </label>

                                <label class="error text-danger font-weight-bold"><?php if (isset($password_length)){
                                        echo $password_length;
                                    } ?>
                                </label>
                        <div class="form-group m-0">
                                <label class="control-label col-sm-1" for="c_password">Confirm Password:</label>
                        <div class="col-sm-4">
                                 <input class="form-control" type="password" name="c_password" placeholder="Confirm Your Password" id="c_password" value="<?= isset($c_password) ? $c_password : '' ?>">
                        </div>
                        </div>
                                <label class="error text-danger pl-3 font-weight-bold"><?php if (isset($error['c_password'])){
                                        echo $error['c_password'];
                                    } ?>
                                </label>

                                <label class="error text-danger font-weight-bold"><?php if (isset($password_length)){
                                        echo $password_length;
                                    } ?>
                                </label>

                                <label class="error text-danger font-weight-bold"><?php if (isset($password_match)){
                                        echo $password_match;
                                    } ?>
                                </label>
                        <div class="form-group m-0">
                                <label class="control-label col-sm-1" for="photo">Photo:</label>
                        <div class="col-sm-4">
                                <input class="form-control" type="file" name="photo" placeholder="Enter your name" id="photo" value="<?= isset($photo_name) ? $photo_name : '' ?>">
                        </div>
                        </div>

                                <label class="error text-danger pl-3 font-weight-bold"><?php if (isset($error['$photo'])){
                                        echo $error['photo'];
                                    } ?>
                                </label>
                        <div class="form-group m-0">
                           <div class="col-sm-4">

                               <label class="control-label">Status:</label><br>
                               <input type="radio" id="active" name="status" checked value="1">
                               <label for="active">Active</label><br>

                               <input type="radio" id="inactive" name="status" value="2">
                               <label for="inactive">Inactive</label><br>

                           </div>
                    </div>

                    <br>

                    <div class="form-group m-0">
                        <div class="">
                            <input class="custom-btn btn login" type="submit" value="Registration" name="registration">
                        </div>
                    </div>
                    <br>
                    <p>Already have account? Then please <a href="login.php">Login</a> here!</p>
                </form>

                <hr>
                <footer class="text-center">
                    Copyright &copyRaj <?= date('Y')?> - 2025 All Right Reserved
                </footer>
            </div>
        </div>
    </div>
  
  </body>
</html>