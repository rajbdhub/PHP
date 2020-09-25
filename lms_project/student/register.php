<?php

require_once '../dbcon.php';

if (isset($_POST['submit'])){
    //extract($_POST);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $class = $_POST['class'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];
    $reg_no = $_POST['reg_no'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $c_password = md5($_POST['c_password']);
    $phone = $_POST['phone'];
    $status = $_POST['status'];
    $check = $_POST['check'];
    $pht = explode('.', $_FILES['image']['name']);
    $pth = end($pht);
    $image = $username.'.'.$pth;

    $error = array();

    if (empty($firstname)){
        $error['firstname'] = "This field is required!";
    }
    if (empty($lastname)){
        $error['lastname'] = "This field is required!";
    }
    if (empty($class)){
        $error['class'] = "This field is required!";
    }
    if (empty($email)){
        $error['email'] = "This field is required!";
    }
    if (empty($roll)){
        $error['roll'] = "This field is required!";
    }
    if (empty($reg_no)){
        $error['reg_no'] = "This field is required!";
    }
    if (empty($username)){
        $error['username'] = "This field is required!";
    }
    if (empty($password)){
        $error['password'] = "This field is required!";
    }
    if (empty($c_password)){
        $error['c_password'] = "This field is required!";
    }
    if (empty($phone)){
        $error['phone'] = "This field is required!";
    }
    if (empty($image)){
        $error['image'] = "This field is required!";
    }
    if (empty($status)){
        $error['status'] = "This field is required!";
    }

if (count($error) == 0){
    //$password_hash = password_hash($password, PASSWORD_DEFAULT);


    $sql="SELECT * FROM `students` WHERE `email` = '$email'";

    $result=mysqli_query($conn,$sql);

      $rowcount=mysqli_num_rows($result);

    if (!$rowcount){
        $username_query = mysqli_query($conn,"SELECT * FROM `students` WHERE `username` = '$username'");
        if (mysqli_num_rows($username_query) == 0){
            if (strlen($username) >= 6){
                if (strlen($password) >= 6){
                    if ($password == $c_password){
                        if ($check == 1){
                            $q = "INSERT INTO `students`(`firstname`, `lastname`, `class`, `email`, `roll`, `reg_no`, `username`, `password`, `c_password`, `phone`, `image`, `status`) VALUES ('$firstname', '$lastname', '$class', '$email', '$roll', '$reg_no', '$username', '$password', '$c_password', '$phone', '$image', '$status')";
                            $query = mysqli_query($conn, $q);
                        }else{
                            $check_error = "Please click on 'I Agree'";
                        }
                        if ($query){
                            move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$image);
                            ?>
                            <script>
                                alert('Registration successful!');
                                window.location="register.php";
                            </script>

                        <?php }else{
                            ?>
                            <script>
                                alert('Registration not successful!');
                                window.location="register.php";
                            </script>
                            <?php
                        }

                    }else {
                        $password_match = "Password don't match";
                    }
                }else{
                    $password_error = "Password must be 6 or above";
                }
            }else {
                $username_numrows = "Username must be 6 or above";
            }
        } else{
            $uername_error = "This username is already exits";
        }
    }else {
        $email_error = "This email is already exit";
    }
}

}

?>


<!doctype html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>LMS</title>
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/endor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../assets/stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <h1 class="text-center text-primary">LMS</h1>
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?= isset($firstname) ? $firstname : '' ?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['firstname'])){
                                    echo $error['firstname'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required value="<?= isset($lastname) ? $lastname : '' ?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['lastname'])){
                                    echo $error['lastname'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group mt-md">
                                <span class="form-with-icon" style="margin-left: 6px ">
                                    <lable for="class"> <i class="fa fa-graduation-cap " style="font-size: 15px; color: #999999"></i> Choose Class</lable>
                                </span>
                                 <select class="form-control" name="class" id="class" required value="<?= isset($class) ? $class : '' ?>">
                                     <option value="0">Select</option>
                                     <option value="1">Class-1</option>
                                     <option value="2">Class-2</option>
                                     <option value="3">Class-3</option>
                                     <option value="4">Class-4</option>
                                     <option value="5">Class-5</option>
                                     <option value="5">Class-6</option>
                                     <option value="5">Class-7</option>
                                     <option value="5">Class-8</option>
                                     <option value="5">Class-9</option>
                                     <option value="5">Class-10</option>
                                 </select>
                        </div>
                        <span class="text-danger">
                                <?php
                                if(isset($error['class'])){
                                    echo $error['class'];
                                }
                                ?>
                            </span>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email" required value="<?= isset($email) ? $email : '' ?>">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['email'])){
                                    echo $error['email'];
                                }
                                ?>
                            </span>

                            <span class="text-danger">
                                <?= isset($email_error) ? $email_error : ''; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="roll" placeholder="Roll" required value="<?= isset($roll) ? $roll : '' ?>">
                                <i class="fa fa-address-book"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['roll'])){
                                    echo $error['roll'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="reg_no" placeholder="Registration No" required value="<?= isset($reg_no) ? $reg_no : '' ?>">
                                <i class="fa fa-registered"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['reg_no'])){
                                    echo $error['reg_no'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="username" placeholder="Username" required value="<?= isset($username) ? $username : '' ?>">
                                <i class="fa fa-users"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['username'])){
                                    echo $error['username'];
                                }
                                ?>
                            </span>
                            <span class="text-danger">
                                <?= isset($username_numrows) ? $username_numrows : ''; ?>
                            </span>

                            <span class="text-danger">
                                <?= isset($uername_error) ? $uername_error : ''; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <i class="fa fa-unlock-alt"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['password'])){
                                    echo $error['password'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="c_password" placeholder="Confirm Password" required>
                                <i class="fa fa-unlock-alt"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['c_password'])){
                                    echo $error['c_password'];
                                }
                                ?>
                            </span>
                            <span class="text-danger">
                                <?= isset($password_match) ? $password_match : ''; ?>
                            </span>
                            <span class="text-danger">
                                <?= isset($password_error) ? $password_error : ''; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="phone" placeholder="Phone ( 01********* )" required value="<?= isset($phone) ? $phone : '' ?>">
                                <i class="fa fa-phone-square"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['phone'])){
                                    echo $error['phone'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <label style="color: #999999" class="control-label" for="image">Upload Photo:</label>
                                <input type="file" class="form-control" name="image" id="image" placeholder="Photo" required>
                                <i class="fa fa-picture-o"></i>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['image'])){
                                    echo $error['image'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group" style="color: #999999">
                            <span class="" style="margin-left: 8px ">
                                <label class="control-label"><i class="fa fa-star" style="font-size: 15px; color: #999999"></i> Status:</label><br>
                               <input style="margin-left: 10px; " type="radio" id="active" name="status" checked value="1">
                               <label for="active">Active</label><br>

                               <input style="margin-left: 10px;" type="radio" id="inactive" name="status" value="0">
                               <label for="inactive">Inactive</label><br>
                            </span>
                            <span class="text-danger">
                                <?php
                                if(isset($error['status'])){
                                    echo $error['status'];
                                }
                                ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="terms" value="1" name="check" required>
                                <label class="check" for="terms">I agree </label>  to the <a href="terms.php">Terms and Conditions</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-block" name="submit" type="submit" value="Register">
                        </div>
                        <div class="form-group text-center">
                            Have an account?, <a href="sign-in.php">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="../assets/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="../assets/javascripts/template-script.min.js"></script>
<script src="../assets/javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>
</html>
