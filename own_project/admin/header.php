<?php

require_once 'dbcon.php';

$p = explode('/', $_SERVER['PHP_SELF']);
$page = end($p);


?>

<!doctype html>
<html lang="en" class="fixed left-sidebar-top">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admin</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="vendor/pace/pace.min.js"></script>
    <link href="vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="stylesheets/css/style.css">


</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="index.html" class="on-click">
                        <h4>Admin Panel</h4>
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>
                
               
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="images/avatar/avatar_user.jpg" />
                        </div>
                        <div class="user-info">
                            <span class="user-name">Jane Doe</span>
                            <span class="user-profile">Admin</span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
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
                                <li class="<?= $page == 'dashboard.php' ? 'active-item' : '' ?>"> <a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>

                                <li class="has-child-item close-item <?= $page == 'home.php' ? 'open-item' : '' ?> <?= $page == 'managehome.php' ? 'open-item' : '' ?>">
                                    <a><i class="fa fa-book" aria-hidden="true"></i><span>Home Page</span></a>
                                    <ul class="nav child-nav level-1" style="">
                                        <li class="<?= $page == 'home.php' ? 'active-item' : '' ?>"><a href="home.php"><i class="fa fa-plus-circle"></i>Input Home Page</a></li>
                                        <li class="<?= $page == 'managehome.php' ? 'active-item' : '' ?>"><a href="managehome.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                Manage Home Page</a></li>

                                    </ul>
                                </li>

                                <li class="has-child-item close-item <?= $page == 'about.php' ? 'open-item' : '' ?> <?= $page == 'manageabout.php' ? 'open-item' : '' ?>">
                                    <a><i class="fa fa-book" aria-hidden="true"></i><span>About Me Page</span></a>
                                    <ul class="nav child-nav level-1" style="">
                                        <li class="<?= $page == 'about.php' ? 'active-item' : '' ?>"><a href="about.php"><i class="fa fa-plus-circle"></i>Input About Page</a></li>
                                        <li class="<?= $page == 'manageabout.php' ? 'active-item' : '' ?>"><a href="manageabout.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                Manage About Page</a></li>

                                    </ul>
                                </li>

                                <li class="has-child-item close-item <?= $page == 'resume.php' ? 'open-item' : '' ?> <?= $page == 'manageresume.php' ? 'open-item' : '' ?>">
                                    <a><i class="fa fa-book" aria-hidden="true"></i><span>Resume Page</span></a>
                                    <ul class="nav child-nav level-1" style="">
                                        <li class="<?= $page == 'resume.php' ? 'active-item' : '' ?>"><a href="resume.php"><i class="fa fa-plus-circle"></i>Input Resume Page</a></li>
                                        <li class="<?= $page == 'manageresume.php' ? 'active-item' : '' ?>"><a href="manageresume.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                Manage Resume Page</a></li>

                                    </ul>
                                </li>

                                <li class="has-child-item close-item <?= $page == 'portfolio.php' ? 'open-item' : '' ?> <?= $page == 'manageportfolio.php' ? 'open-item' : '' ?>">
                                    <a><i class="fa fa-book" aria-hidden="true"></i><span>Portfolio Page</span></a>
                                    <ul class="nav child-nav level-1" style="">
                                        <li class="<?= $page == 'portfolio.php' ? 'active-item' : '' ?>"><a href="portfolio.php"><i class="fa fa-plus-circle"></i>Input Portfolio Page</a></li>
                                        <li class="<?= $page == 'manageportfolio.php' ? 'active-item' : '' ?>"><a href="manageportfolio.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                Manage Portfolio Page</a></li>

                                    </ul>
                                </li>

                                <li class="has-child-item close-item <?= $page == 'blog.php' ? 'open-item' : '' ?> <?= $page == 'manageblog.php' ? 'open-item' : '' ?>">
                                    <a><i class="fa fa-book" aria-hidden="true"></i><span>Blog Page</span></a>
                                    <ul class="nav child-nav level-1" style="">
                                        <li class="<?= $page == 'blog.php' ? 'active-item' : '' ?>"><a href="blog.php"><i class="fa fa-plus-circle"></i>Input Blog Page</a></li>
                                        <li class="<?= $page == 'manageblog.php' ? 'active-item' : '' ?>"><a href="manageblog.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                Manage Blog Page</a></li>

                                    </ul>
                                </li>

                                <li class="has-child-item close-item <?= $page == 'contact.php' ? 'open-item' : '' ?> <?= $page == 'managecontact.php' ? 'open-item' : '' ?>">
                                    <a><i class="fa fa-book" aria-hidden="true"></i><span>Contact Page</span></a>
                                    <ul class="nav child-nav level-1" style="">
                                        <li class="<?= $page == 'contact.php' ? 'active-item' : '' ?>"><a href="contact.php"><i class="fa fa-plus-circle"></i>Input Home Page</a></li>
                                        <li class="<?= $page == 'managecontact.php' ? 'active-item' : '' ?>"><a href="managecontact.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                Manage Home</a></li>

                                    </ul>
                                </li>


                                    </ul>
                                </li>

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
                            <div class="col-sm-12 col-md-4">
                                <div class="panel widgetbox wbox-2 bg-scale-0">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-globe color-darker-1"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-1">Views</h4>
                                                    <h1 class="title color-primary"> 154.609</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-user color-darker-2"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-2">New Users</h4>
                                                    <h1 class="title color-w"> 105</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-envelope color-lighter-1"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-lighter-1">New Messages</h4>
                                                    <h1 class="title color-light"> 124</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                           
