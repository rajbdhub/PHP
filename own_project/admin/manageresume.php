<?php require_once 'header.php';


$resume = mysqli_query($conn, "SELECT * FROM `resume`");

?>

<div class="edit col-md-8 text-center">


    <div class="col-sm-12 col-md-12" style="min-height: 550px;">
        <ul class="nav ">
            <!--HOME-->
            <li class="active-item"><a style="padding: 0" href="manage-books.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Manage Resume</span></a></li>
        </ul>
        <br>
        <div class="row animated fadeInUp">
            <div class="col-sm-12">
                <h4 class="section-subtitle"><b>Manage Books:</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Knowledge 1</th>
                                    <th>Knowledge 2</th>
                                    <th>Knowledge 3</th>
                                    <th>Knowledge 4</th>
                                    <th>Knowledge 5</th>
                                    <th>Knowledge 6</th>
                                    <th>Knowledge 7</th>
                                    <th>Knowledge 8</th>
                                    <th>Knowledge 9</th>
                                    <th>Knowledge 10</th>
                                    <th>Knowledge 11</th>
                                    <th>Knowledge 12</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($resume)){

                                    ?>
                                    <tr>

                                        <td><?= $row['knowledgeone'] ?></td>
                                        <td><?= $row['knowledgetwo'] ?></td>
                                        <td><?= $row['knowledgethree'] ?></td>
                                        <td><?= $row['knowledgefour'] ?></td>
                                        <td><?= $row['knowledgefive'] ?></td>
                                        <td><?= $row['knowledgesix'] ?></td>
                                        <td><?= $row['knowledgeseven'] ?></td>
                                        <td><?= $row['knowledgeeight'] ?></td>
                                        <td><?= $row['knowledgenine'] ?></td>
                                        <td><?= $row['knowledgeten'] ?></td>
                                        <td><?= $row['knowledgeeleven'] ?></td>
                                        <td><?= $row['knowledgetwelve'] ?></td>


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


        <a style="padding: 20px;" href="javascript:avoid(0)" class="btn btn-warning" data-toggle="modal" data-target="#managehome"><i class="fa fa-pencil"> Edit Resume Page</i></a>

    </div>


    <div class="modal fade" id="managehome" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="doinfo-modalcument">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Manage Resume Page</h4>
                </div>
                <div class="modal-body">

                    <table class="table table-bordered">
                        <?php

                        foreach ($resume as $row) {
                            ?>

                            <div class="panel text-left">
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <label for="one">Knowledge 1</label>
                                                    <input type="text" class="form-control" id="one" name="one" placeholder="your name" value="<?= $row['knowledgeone'] ?>" >
                                                    <input type="hidden" class="form-control" id="" name="id" placeholder="id" value="<?= $row['id'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="two">Knowledge 2</label>
                                                    <input type="text" class="form-control" id="two" name="two" placeholder="your name" value="<?= $row['knowledgetwo'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="three">Knowledge 3</label>
                                                    <input type="text" class="form-control" id="three" name="three" placeholder="your name" value="<?= $row['knowledgethree'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="four">Knowledge 4</label>
                                                    <input type="text" class="form-control" id="four" name="four" placeholder="your name" value="<?= $row['knowledgefour'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="five">Knowledge 5</label>
                                                    <input type="text" class="form-control" id="five" name="five" placeholder="your name" value="<?= $row['knowledgefive'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="six">Knowledge 6</label>
                                                    <input type="text" class="form-control" id="six" name="six" placeholder="your name" value="<?= $row['knowledgesix'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="seven">Knowledge 7</label>
                                                    <input type="text" class="form-control" id="seven" name="seven" placeholder="your name" value="<?= $row['knowledgeseven'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="eight">Knowledge 8</label>
                                                    <input type="text" class="form-control" id="eight" name="eight" placeholder="your name" value="<?= $row['knowledgeeight'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="nine">Knowledge 9</label>
                                                    <input type="text" class="form-control" id="nine" name="nine" placeholder="your name" value="<?= $row['knowledgenine'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="ten">Knowledge 10</label>
                                                    <input type="text" class="form-control" id="ten" name="ten" placeholder="your name" value="<?= $row['knowledgeten'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="eleven">Knowledge 11</label>
                                                    <input type="text" class="form-control" id="eleven" name="eleven" placeholder="your name" value="<?= $row['knowledgeeleven'] ?>" >

                                                </div>
                                                <div class="form-group">
                                                    <label for="twelve">Knowledge 12</label>
                                                    <input type="text" class="form-control" id="twelve" name="twelve" placeholder="your name" value="<?= $row['knowledgetwelve'] ?>" >

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
        $knowledgeone = $_POST['one'];
        $knowledgetwo = $_POST['two'];
        $knowledgethree = $_POST['three'];
        $knowledgefour = $_POST['four'];
        $knowledgefive = $_POST['five'];
        $knowledgesix = $_POST['six'];
        $knowledgeseven = $_POST['seven'];
        $knowledgeeight = $_POST['eight'];
        $knowledgenine = $_POST['nine'];
        $knowledgeten = $_POST['ten'];
        $knowledgeeleven = $_POST['eleven'];
        $knowledgetwelve = $_POST['twelve'];

        $edit = mysqli_query($conn, "UPDATE `resume` SET `knowledgeone`='$knowledgeone',`knowledgetwo`='$knowledgetwo',`knowledgethree`='$knowledgethree',`knowledgefour`='$knowledgefour',`knowledgefive`='$knowledgefive',`knowledgesix`='$knowledgesix',`knowledgeseven`='$knowledgeseven',`knowledgeeight`='$knowledgeeight',`knowledgenine`='$knowledgenine',`knowledgeten`='$knowledgeten',`knowledgeeleven`='$knowledgeeleven',`knowledgetwelve`='$knowledgetwelve' WHERE `id` = '$id'");

        if ($edit){

            ?>
            <script>
                alert('Input successful!');
                window.location="manageresume.php";
            </script>

        <?php }else{
        ?>
            <script>
                alert('Input not successful!');
                window.location="manageresume.php";
            </script>
            <?php

        }
    }

    ?>






    <?php require_once 'footer.php'?>
