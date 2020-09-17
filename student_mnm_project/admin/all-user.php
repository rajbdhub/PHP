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
        <h1 class="text-primary"><i class="fas fa-volleyball-ball"> All Student <small style="color: #847f7f">Check All Student</small></i></h1>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0" style="font-size: 13px"><a href="index.php?page=dashboard" class="text-decoration-none"><i class="fas fa-tachometer-alt"></i> Dashboard</a></span>
        </nav>
        <br>
        <div class="main">
            <table class="table table-bordered text-center table-hover" id="data">
                <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Photo</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $scrap = mysqli_query($conn, "SELECT * FROM `users` ");
                while ($row = mysqli_fetch_assoc($scrap)){?>


                    <tr>
                        <td><?= ucwords($row['name'])?></td>
                        <td><?= $row['email']?></td>
                        <td><?= $row['username']?></td>
                        <td><img style="width: 50px" src="../images/<?= $row['photo']?>" alt="photo"></td>
                    </tr>
                    <?php
                }

                ?>

                </tbody>
            </table>
        </div>



    </div>
</div>
<div class="container p-0">
    <?php require_once 'footer.php'?>
</div>



</body>
</html>