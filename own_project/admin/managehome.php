<?php require_once 'header.php';


$result = mysqli_query($conn, "SELECT * FROM `home`");

?>

<div class="edit col-md-8">


    <div class="col-sm-12 col-md-12" style="min-height: 550px;">
        <ul class="nav ">
            <!--HOME-->
            <li class="active-item"><a style="padding: 0" href="manage-books.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Manage Home</span></a></li>
        </ul>
        <br>
        <div class="row animated fadeInUp">
            <div class="col-sm-12">
                <h4 class="section-subtitle"><b>Manage Home:</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered text-center" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Working Category</th>
                                    <th>Image</th>
                                    <th>Movement Category 1</th>
                                    <th>Movement Category 1</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)){

                                    ?>
                                    <tr>
                                        <td><?= ucwords($row['name']) ?></td>
                                        <td><?= $row['work'] ?></td>
                                        <td><img style="width: 50px;" src="images/home/<?= $row['image'] ?>" alt="Image"></td>
                                        <td><?= $row['movcat1'] ?></td>
                                        <td><?= $row['movcat2'] ?></td>

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
        <a style="padding: 20px;" href="javascript:avoid(0)" class="btn btn-warning text-center" data-toggle="modal" data-target="#managehome"><i class="fa fa-pencil"> Edit Home Page</i></a>
    </div>


</div>


    <div class="modal fade" id="managehome" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="doinfo-modalcument">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Manage Home Page</h4>
                </div>
                <div class="modal-body">

                    <table class="table table-bordered">
                        <?php

                        foreach ($result as $row) {
                            ?>

                            <div class="panel text-left">
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="your name" value="<?= $row['name'] ?>">
                                                    <input type="hidden" class="form-control" id="" name="id" placeholder="book name" value="<?= $row['id'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="author">Working Category</label>
                                                    <input type="text" class="form-control" name="work" id="author" placeholder="author name" value="<?= $row['work'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <span> <img style="width: 100px" src="images/home/<?= $row['image'] ?>" alt=""> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="p_name">Image</label>
                                                    <input type="file" class="form-control" name="image" id="p_name" value="images/home/<?= $row['image'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="purchase" >Movement Category 1</label>
                                                    <input type="text" class="form-control" name="mc_1" id="purchase" placeholder="purchase date" value="<?= $row['movcat1'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Movement Category 2</label>
                                                    <input type="text" class="form-control" name="mc_2" id="price" placeholder="book price" value="<?= $row['movcat2'] ?>">
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
    $name = $_POST['name'];
    $work = $_POST['work'];
    $movcat1 = $_POST['mc_1'];
    $movcat2 = $_POST['mc_2'];
    $pht = explode('.',$_FILES['image']['name']);
    $pht = end($pht);
    $image = $work.'.'.$pht;
    $edit = mysqli_query($conn, "UPDATE `home` SET `name`= '$name',`work`= '$work',`image`= '$image',`movcat1`= '$movcat1',`movcat2`='$movcat2' WHERE `id` = '$id'");

    if ($edit){
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/home/'.$image);
        ?>
        <script>
            alert('Update successful!');
            window.location="managehome.php";
        </script>

    <?php }else{
    ?>
        <script>
            alert('Update not successful!');
            window.location="managehome.php";
        </script>
        <?php

    }
}


?>






<?php require_once 'footer.php'?>