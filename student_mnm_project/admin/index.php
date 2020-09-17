<?php

require_once 'dbcon.php';

if (!isset($_SESSION['user_login'])){
    header("location: login.php");
}

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

    <!-- Our CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../css/style.css?v=1.01">

    <!-- jQuer linkup -->
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/script.js"></script>

    <title>SMS</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Sms</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">

                <ul class="me list-unstyled list-inline navbar-nav mr-auto">
                    <li class="pr-4"><a href="" style="color: black"><i class="fas fa-door-open"> Welcome</i></a></li>

                    <li class="pr-4"><a href="" style="color: black"><i class="fas fa-envelope"> Sms</i></a></li>

                    <li class="pr-4"><a href="index.php?page=registration" class="text-decoration-none" style="color: black"><i class="fas fa-user-shield"></i> Add user</a></li>

                    <li class="pr-4"><a href="index.php?page=profile" style="color: black"><i class="fas fa-user-alt"> Profile</i></a></li>

                    <li class="pr-4"><a href="logout.php" style="color: black"><i class="fas fa-power-off"> Logout</i></a></li>
                </ul>

            </form>
        </div>
    </nav>
    <hr>
    <br>
 <div class="row">
     <div class="col-md-3 ">
         <div class="card">
         <ul class="list-group list-group-flush">
             <li class="list-group-item active"><a href="index.php?page=dashboard" class="text-decoration-none text-white"><i class="fas fa-tachometer-alt text-white"></i> Dashboard</a></li>
             <li class="list-group-item"><a href="index.php?page=add-student" class="text-decoration-none text-black" style="color: black"><i class="fas fa-user-plus"></i> Add Student</a></li>
             <li class="list-group-item"><a href="index.php?page=update-student" class="text-decoration-none" style="color: black"><i class="fas fa-edit"></i> Update Student</a></li>
             <li class="list-group-item"><a href="index.php?page=all-student" class="text-decoration-none" style="color: black"><i class="fas fa-volleyball-ball"></i> All Student</a></li>
             <li class="list-group-item"><a href="index.php?page=all-user" class="text-decoration-none" style="color: black"><i class="fas fa-users"></i> All User</a></li>
         </ul>
         </div>
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



</body>
</html>