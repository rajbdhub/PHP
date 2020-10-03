<?php require_once 'header.php';


$aboutme = mysqli_query($conn, "SELECT * FROM `about`");

?>

    <div class="edit col-md-8">


    <div class="col-sm-12 col-md-12" style="min-height: 550px;">
        <ul class="nav ">
            <!--HOME-->
            <li class="active-item"><a style="padding: 0" href="manage-books.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Manage About Page</span></a></li>
        </ul>
        <br>

        <div class="row animated fadeInUp">
            <div class="col-sm-12">
                <h4 class="section-subtitle"><b>Manage About Page:</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered text-center" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Age</th>
                                    <th>Residence</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Clients</th>
                                    <th>Hours</th>
                                    <th>Awards</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($aboutme)){

                                    ?>
                                    <tr>
                                        <td><?= $row['age'] ?></td>
                                        <td><?= $row['residence'] ?></td>
                                        <td><?= $row['address'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= $row['clients'] ?></td>
                                        <td><?= $row['hours'] ?></td>
                                        <td><?= $row['awards'] ?></td>

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


        <div class="b text-center">
            <a style="padding: 20px;" href="javascript:avoid(0)" class="btn btn-warning text-center" data-toggle="modal" data-target="#managehome"><i class="fa fa-pencil"> Edit About Page</i></a>
        </div>

    </div>


    <div class="modal fade" id="managehome" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="doinfo-modalcument">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Manage About Page</h4>
                </div>
                <div class="modal-body">

                    <table class="table table-bordered">
                        <?php

                        foreach ($aboutme as $row) {
                            ?>

                            <div class="panel text-left">
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="age">Age</label>
                                                    <input type="text" class="form-control" id="age" name="age" placeholder="your name" value="<?= $row['age'] ?>" >
                                                    <input type="hidden" class="form-control" id="" name="id" placeholder="book name" value="<?= $row['id'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="residence">Residence</label>
                                                    <input type="text" class="form-control" name="residence" id="residence" placeholder="author name" value="<?= $row['residence'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" name="address" id="address" value="<?= $row['address'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" >Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="purchase date" value="<?= $row['email'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="book price" value="<?= $row['phone'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="clients">Clients</label>
                                                    <input type="text" class="form-control" name="clients" id="clients" placeholder="book price" value="<?= $row['clients'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hours">Hours</label>
                                                    <input type="text" class="form-control" name="hours" id="hours" placeholder="book price" value="<?= $row['hours'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="awards">Awards</label>
                                                    <input type="text" class="form-control" name="awards" id="awards" placeholder="book price" value="<?= $row['awards'] ?>">
                                                </div>
                                                <div class="form-group text-center">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                                            Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }

                        ?>

                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $age = $_POST['age'];
    $residence = $_POST['residence'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $clients = $_POST['clients'];
    $hours = $_POST['hours'];
    $awards = $_POST['awards'];


    $aboutmeup = mysqli_query($conn, "UPDATE `about` SET `age`='$age',`residence`='$residence',`address`='$address',`email`='$email',`phone`='$phone',`clients`='$clients',`hours`='$hours',`awards`='$awards' WHERE `id` = '$id'");

    if ($aboutmeup){

        ?>
        <script>
            alert('Update successful!');
            window.location="manageabout.php";
        </script>

    <?php }else{
    ?>
        <script>
            alert('Update not successful!');
            window.location="manageabout.php";
        </script>
        <?php

    }
}


?>






<?php require_once 'footer.php'?>