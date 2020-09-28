<?php
require_once '../dbcon.php';
$p = explode('/', $_SERVER['PHP_SELF']);
$page = end($p);

$email = $_SESSION['email'];

$result = mysqli_query($conn, "SELECT * FROM `students` WHERE `email` = '$email'");
$row = mysqli_fetch_assoc($result);


?>

<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>LMS</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="vendor/pace/pace.min.js"></script>
    <link href="vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css">
    <!--dataTable-->
    <link rel="stylesheet" href="../assets/vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../assets/stylesheets/css/style.css">


</head>

<body>
<div class="wrap">
    <!-- page HEADER -->
    <!-- ========================================================= -->
    <div class="page-header">
        <!-- LEFTSIDE header -->
        <div class="leftside-header">
            <div class="logo">
                <a href="index.php" class="on-click">
                    <h2>LMS</h2>
                </a>
            </div>
            <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <!-- RIGHTSIDE header -->
        <div class="rightside-header">
            <div class="header-middle"></div>

            <!--NOCITE HEADERBOX-->
            <div class="header-section hidden-xs" id="notice-headerbox">

                <!--alerts notices-->
                <div class="notice" id="alerts-notice">
                    <i class="fa fa-bell-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger">7</span></i>

                    <div class="dropdown-box basic">
                        <div class="drop-header">
                            <h3><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</h3>
                            <span class="badge x-danger b-rounded">7</span>

                        </div>
                        <div class="drop-content">
                            <div class="widget-list list-left-element list-sm">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-warning color-warning"></i></div>
                                            <div class="text">
                                                <span class="title">8 Bugs</span>
                                                <span class="subtitle">reported today</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-flag color-danger"></i></div>
                                            <div class="text">
                                                <span class="title">Error</span>
                                                <span class="subtitle">sevidor C down</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-cog color-dark"></i></div>
                                            <div class="text">
                                                <span class="title">New Configuration</span>
                                                <span class="subtitle"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-tasks color-success"></i></div>
                                            <div class="text">
                                                <span class="title">14 Task</span>
                                                <span class="subtitle">completed</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                            <div class="text">
                                                <span class="title">21 Menssage</span>
                                                <span class="subtitle"> (see more)</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="drop-footer">
                            <a>See all notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
            </div>
            <!--USER HEADERBOX -->
            <div class="header-section" id="user-headerbox">
                <div class="user-header-wrap">
                    <div class="user-photo">
                        <img alt="profile photo" src="../assets/images/avatar/avatar_user.jpg" />
                    </div>
                    <div class="user-info">
                        <span class="user-name"><?= $row['firstname'].' '.$row['lastname']?></span>
                        <span class="user-profile">Student</span>
                    </div>
                    <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                    <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                </div>
                <div class="user-options dropdown-box">
                    <div class="drop-content basic">
                        <ul>
                            <li class="<?= $page == 'student-profile.php' ? '' : '' ?>" > <a href="student-profile.php" ><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-separator"></div>
            <!--Log out -->
            <div class="header-section">
                <a href="logout.php" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body">
        <!-- LEFT SIDEBAR -->
        <!-- ========================================================= -->
        <div class="left-sidebar">
            <!-- left sidebar HEADER -->
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">Navigation</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
            <!-- NAVIGATION -->
            <!-- ========================================================= -->
            <div id="left-nav" class="nano">
                <div class="nano-content">
                    <nav>
                        <ul class="nav nav-left-lines" id="main-nav">
                            <!--HOME-->
                            <li class="<?= $page == 'index.php' ? 'active-item' : '' ?>"> <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                            <li class="<?= $page == 'books.php' ? 'active-item' : '' ?>"> <a href="books.php"><i class="fa fa-book" aria-hidden="true"></i><span>Books</span></a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <!-- ========================================================= -->
        <div class="content">
            <!-- content HEADER -->
            <!-- ========================================================= -->
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                    </ul>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row animated fadeInUp">
                <div class="col-sm-12 col-lg-12">
                    <div class="row">
                        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                        <!--WIDGETBOX-->
                        <!--WIDGETBOX-->
                        <div class="col-sm-12 col-md-3">
                            <div class="panel widgetbox wbox-2 bg-scale-0">
                                <a href="">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-lock color-darker-1"></span>
                                            </div>
                                            <?php

                                            $librarian = mysqli_query($conn, "SELECT * FROM `libraian`");
                                            $total_librarian = mysqli_num_rows($librarian);

                                            ?>
                                            <div class="col-xs-4">
                                                <h4 class="subtitle color-darker-1">Total Librarian</h4>
                                                <h1 class="title color-primary"> <?= $total_librarian ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                <a href="students.php">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-user color-darker-2"></span>
                                            </div>
                                            <?php

                                            $student = mysqli_query($conn, "SELECT * FROM `students`");
                                            $total_student = mysqli_num_rows($student);

                                            ?>
                                            <div class="col-xs-4">
                                                <h4 class="subtitle color-darker-2">Total Student</h4>
                                                <h1 class="title color-w"> <?= $total_student ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="manage-books.php">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-book color-lighter-1"></span>
                                            </div>
                                            <?php

                                            $book = mysqli_query($conn, "SELECT * FROM `books`");
                                            $total_book = mysqli_num_rows($book);

                                            ?>
                                            <div class="col-xs-4">
                                                <h4 class="subtitle color-lighter-1">Book Type</h4>
                                                <h1 class="title color-light"> <?= $total_book ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="panel widgetbox wbox-2 bg-warning color-light">
                                <a href="manage-books.php">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-book color-lighter-1"></span>
                                            </div>
                                            <?php

                                            $totalbook = mysqli_query($conn, "SELECT SUM(`book_quantity`) as total FROM `books`");
                                            $total_qun = mysqli_fetch_assoc($totalbook);

                                            ?>
                                            <div class="col-xs-4">
                                                <h4 class="subtitle color-lighter-1">Book Quantity</h4>
                                                <h1 class="title color-light"> <?= $total_qun['total']; ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="panel widgetbox wbox-2 bg-primary color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-book color-lighter-1"></span>
                                            </div>
                                            <?php

                                            $totalbook = mysqli_query($conn, "SELECT SUM(`available_quantity`) as total FROM `books`");
                                            $total_qun = mysqli_fetch_assoc($totalbook);

                                            ?>
                                            <div class="col-xs-4">
                                                <h4 class="subtitle color-lighter-1">Available Book</h4>
                                                <h1 class="title color-light"> <?= $total_qun['total']; ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
