<?php
require_once '../dbcon.php';

if (!isset($_SESSION['email'])){
    header('location: login.php');
}


?>

<?php require_once 'header.php'?>
    <!--Body part-->
    <!-- ========================================================= -->
                            <div class="col-sm-12 col-md-8" style="min-height: 600px;">
                                <ul class="nav ">
                                    <!--HOME-->
                                    <li class="active-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard</span></a></li>
                                </ul>
                                <h1 style="font-size: 50px; margin-left: 20px; color: #d5cfcf;">Welcome to Dashboard!</h1>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <?php require_once 'footer.php'?>
                            </div>



