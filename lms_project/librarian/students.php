
<?php
require_once 'header.php';
$query = mysqli_query($conn, "SELECT * FROM `students`" );
?>
<div class="col-sm-12 col-md-8" style="min-height: 550px;">
    <ul class="nav ">
        <!--HOME-->
        <li class="active-item"><a href="students.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Students</span></a></li>

        <div class="row animated fadeInUp">
            <div class="col-sm-12">
                <div class="pull-left">
                    <h4 class="section-subtitle"><b>Students List:</b></h4>
                </div>
                <div class="pull-right">
                    <a href="print-students.php" target="_blank"><i class="fa fa-print btn btn-warning"> Print</i></a>
                </div>
                <div class="clearfix"></div>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Class</th>
                                    <th>Email</th>
                                    <th>Roll</th>
                                    <th>Reg_NO</th>
                                    <th>Phone</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($query)){

                                    ?>
                                    <tr>
                                        <td><?= ucwords($row['firstname']) ?></td>
                                        <td><?= ucwords($row['lastname']) ?></td>
                                        <td><?= $row['class'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['roll'] ?></td>
                                        <td><?= $row['reg_no'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><img src="<?= $row['image'] ?>" alt="Image"></td>
                                        <td><?= $row['status'] ==1 ? 'Active' : 'Inactive' ?></td>
                                        <td><?php
                                            if ($row['status'] ==1){
                                                ?>
                                                <a href="status_inactive.php?id=<?= base64_encode($row['id']) ?>" class="btn btn-primary"><i class="fa fa-arrow-down"></i></a>
                                            <?php

                                            }else{
                                                ?>
                                                <a href="status_active.php?id=<?= base64_encode($row['id']) ?>" class="btn btn-warning"><i class="fa fa-arrow-down"></i></a>
                                            <?php
                                            }

                                            ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>

                                   </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </ul>
</div>
<div class="col-sm-12 col-md-12">
    <?php require_once 'footer.php'?>
</div>
