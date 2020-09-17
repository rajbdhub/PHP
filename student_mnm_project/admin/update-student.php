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
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
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
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Class</th>
                    <th scope="col">City</th>
                    <th scope="col">Parents Contact</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $scrap = mysqli_query($conn, "SELECT * FROM `studentinfo` ");
                while ($row = mysqli_fetch_assoc($scrap)){?>


                    <tr>
                        <th><?= $row['id']?></th>
                        <td style="padding: 12px 0 0 0"><?= ucwords($row['name'])?></td>
                        <td><?= $row['roll']?></td>
                        <td><?= $row['class']?></td>
                        <td><?= ucwords($row['city'])?></td>
                        <td style="padding: 12px 0 0 0"><?= $row['parentscontact']?></td>
                        <td style="padding: 12px 0 0 0"><img style="width: 25%" src="images/<?= $row['photo']?>" alt="photo"></td>
                        <td>
                            <a href="index.php?page=edit&id=<?= base64_encode($row['id'])?>"><i class="fas fa-pen btn btn-warning"> Edit</i></a>
                            <br>
                            <hr>
                            <a href="delete.php?id=<?= base64_encode($row['id'])?>"><i class="fas fa-trash-alt btn btn-danger"> Delete</i></a>
                        </td>
                    </tr>
                    <?php
                }

                ?>

                </tbody>
            </table>
        </div>

        <?php if (isset($_GET['page'])){
            $page = $_GET['page'].'.php';
        }else{
            $page = "dashboard.php";
        }


        if (file_exists($page)){
            require_once $page;
        }else{
            require_once '404.php';
        }
        ?>
        <?php require_once 'footer.php'?>


    </div>
</div>
<div class="container p-0">
    <?php require_once 'footer.php'?>
</div>



</body>
</html>
