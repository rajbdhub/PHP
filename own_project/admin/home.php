<?php require_once 'header.php';

if (!isset($_SESSION['email'])){
    header('location: login.php');
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $work = $_POST['work'];
    $movcat1 = $_POST['mc_1'];
    $movcat2 = $_POST['mc_2'];
    $pht = explode('.',$_FILES['image']['name']);
    $pht = end($pht);
    $image = $work.'.'.$pht;
    $result = mysqli_query($conn, "INSERT INTO `home`(`name`, `work`, `image`, `movcat1`, `movcat2`) VALUES ('$name', '$work', '$image', '$movcat1', '$movcat2' )");

    if ($result){
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/home/'.$image);
        ?>
        <script>
            alert('Input successful!');
            window.location="home.php";
        </script>

    <?php }else{
        ?>
        <script>
            alert('Input not successful!');
            window.location="home.php";
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
        <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Home Page</span></a>
    </div>

    <div class="col-md-8 panel">
        <div class="panel-content">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <h5 class="mb-lg text-bold">Home Page:</h5>
                        <div class="form-group">
                            <label for="book_name " class="col-sm-4 control-label">Your Name :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="book_name" name="name" placeholder="Your Name" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="book_image" class="col-sm-4 control-label">Working Category :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="work" id="book_image" placeholder="Choose a Category" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="author" class="col-sm-4 control-label">Input Image :</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="image" id="author" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="author" class="col-sm-4 control-label">Movement Category 1 :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mc_1" id="author" placeholder="Choose movement category" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="author" class="col-sm-4 control-label">Movement Category 2 :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mc_2" id="author" placeholder="Choose movement category" >
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