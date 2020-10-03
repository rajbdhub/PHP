<?php require_once 'header.php';


if(isset($_POST['submit'])){
    $age = $_POST['age'];
    $residence = $_POST['residence'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $clients = $_POST['clients'];
    $hours = $_POST['hours'];
    $awards = $_POST['awards'];


    $aboutme = mysqli_query($conn, "INSERT INTO `about`(`age`, `residence`, `address`, `email`, `phone`, `clients`, `hours`, `awards`) VALUES ('$age', '$residence', '$address', '$email', '$phone', '$clients', '$hours', '$awards' )");



    if ($aboutme){

        ?>
        <script>
            alert('Input successful!');
            window.location="about.php";
        </script>

    <?php }else{
        ?>
        <script>
            alert('Input not successful!');
            window.location="about.php";
        </script>
        <?php

    }
}

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=hh, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>


    <div class="home">
        <div class="first mb-md">
            <a href="about.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > About Page</span></a>
        </div>

        <div class="col-md-8 panel">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <h5 class="mb-lg text-bold">About Page:</h5>

                            <div class="form-group">
                                <label for="age" class="col-sm-4 control-label">Age :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="age" id="age" placeholder="your age">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="residence" class="col-sm-4 control-label">Residence :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="residence" id="residence" placeholder="residence">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-4 control-label">Address :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="your address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">email :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="your email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-4 control-label">Phone :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="your phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="clients" class="col-sm-4 control-label">Clients :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="clients" id="clients" placeholder="input numbers">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hours" class="col-sm-4 control-label">Hours :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="hours" id="hours" placeholder="input numbers">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="awards" class="col-sm-4 control-label">Awards :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="awards" id="awards" placeholder="input numbers">
                                </div>
                            </div>

                            <div class="form-group pull-right">
                                <div class="col-sm-offset-2 col-sm-8" style="margin-right: 22px">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                        Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>

        </div>
    </div>

    </body>
    </html>




<?php require_once 'footer.php' ?>