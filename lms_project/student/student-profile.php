<?php

require_once 'header.php';
require_once '../dbcon.php';

$email = $_SESSION['email'];

$result = mysqli_query($conn, "SELECT * FROM `students` WHERE `email` = '$email'");
$row = mysqli_fetch_assoc($result);
?>
<div class="col-sm-12 col-md-8" style="min-height: 550px;">
    <ul class="nav ">
        <!--HOME-->
        <li class="active-item"><a href="student-profile.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Student Profile</span></a></li>
        <div class="panel">
            <div class="panel-content">
                <form method="post" action="">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Email</th>
                            <th>Roll</th>
                            <th>Registration NO</th>
                            <th>Username</th>
                            <th>Phone</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td><?= $row['firstname']. ' '.$row['lastname'] ?></td>
                            <td><?=$row['class']?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['roll'] ?></td>
                            <td><?= $row['reg_no'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['phone'] ?></td>
                            <td><?= $row['status'] ?></td>
                        </tr>

                    </table>

                </form>
            </div>
        </div>
    </ul>


<?php
require_once 'header.php';
?>
