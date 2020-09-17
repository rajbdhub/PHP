<?php

require_once 'dbcon.php';

if (!isset($_SESSION['user_login'])){
    header("location: login.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
</head>
<body>

<div class="row">
    <div class="col-sm-12">
        <h1 class="text-primary"><i class="fas fa-user"> User Profile <small style="color: #847f7f">My Profile</small></i></h1>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0" style="font-size: 13px"><a href="index.php?page=dashboard" class="text-decoration-none"><i class="fas fa-tachometer-alt"></i> Dashboard</a></span>
        </nav>
        <br>

        <?php

        $session_user = $_SESSION['user_login'];
        $scrap = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$session_user'");
        $user_row = mysqli_fetch_assoc($scrap);

        ?>
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <tr>
                        <td>User ID</td>
                        <td><?= $user_row['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?= ucwords($user_row['name']); ?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?= $user_row['username']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $user_row['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td class="font-weight-bold"><?= $user_row['status']==1 ? 'Active' : 'Inactive'; ?></td>
                    </tr>
                    <tr>
                        <td>Signup Date</td>
                        <td><?= $user_row['created_at']; ?></td>
                    </tr>

                </table>
                <div class="edit-profile text-right">
                    <a class="btn btn-primary" href="index.php?page=update-student">Edit Profile</a>
                </div>
                <br>
                <br>
                <br>
            </div>
            <div class="col-sm-6">
                <a href="">
                    <img width="50%" class="img-thumbnail" src="../images/<?= $user_row['photo']; ?>" alt="Photo">
                </a>
                <br>
                <br>
                <div class="photo">
                    <?php
                    if (isset($_POST['upload'])){
                          $pht = explode('.' , $_FILES['photo']['name']);
                          $pth = end($pht);
                          $photo = $session_user.'.'.$pth;

                          $upload_image = mysqli_query($conn, "UPDATE `users` SET `photo` = '$photo' WHERE `username` = '$session_user'");

                          if (isset($upload_image)){
                              move_uploaded_file($_FILES['photo']['tmp_name'],'../images/'.$photo);
                          }
                    }

                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <label for="photo">Photo:</label>
                    <input type="file" name="photo">

                </div>
                <br>

                    <div class="edit-profile " style="margin-top: 8px">
                        <input class="btn btn-primary" type="submit" name="upload" value="Upload">
                    </div>
                </form>

            </div>
        </div>

        </div>
    </div>
</div>
<div class="container p-0">
    <?php require_once 'footer.php'?>
</div>



</body>
</html>