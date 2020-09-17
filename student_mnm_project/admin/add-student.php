<?php

require_once 'dbcon.php';
if (!isset($_SESSION['user_login'])){
    header("location: login.php");
}

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $pth = explode('.', $_FILES['picture']['name']);
    $pht = end($pth);
    $photo = $roll.'.'.$pht;
    $query = mysqli_query($conn, "INSERT INTO `studentinfo`(`name`, `roll`, `class`, `city`, `parentscontact`, `photo`) VALUES ('$name', '$roll', '$class', '$city', '$contact', '$photo')");

    if (isset($query)){
        move_uploaded_file($_FILES['picture']['tmp_name'], 'images/'.$photo);
        ?>
        <script>
            alert('Added successfully!');
            window.location="index.php?page=add-student";
        </script>

    <?php }else{
    ?>
    <script>
        alert('Adding not successful!');
        window.location="index.php?page=add-student";
    </script>
    <?php

}
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
</head>
<body>

    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-primary"><i class="fas fa-user-plus"> Add Student <small style="color: #847f7f">Add New Student</small></i></h1>
            <nav class="navbar navbar-light bg-light">
                <span class="navbar-brand mb-0" style="font-size: 13px"><a href="index.php?page=dashboard" class="text-decoration-none"><i class="fas fa-tachometer-alt"></i> Dashboard</a></span>
            </nav>
            <br>
            <div class="form">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Student Name:</label>
                        <input type="text" name="name" placeholder="type name here" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="roll">Student Roll:</label>
                        <input type="text" name="roll" placeholder="type roll here" id="roll" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="class">Student Class:</label>
                        <br>
                        <select class="form-control" name="class" id="class" required>
                            <option value="0">Select</option>
                            <option value="1">Class 1</option>
                            <option value="2">class 2</option>
                            <option value="3">class 3</option>
                            <option value="4">class 4</option>
                            <option value="5">class 5</option>
                            <option value="6">class 6</option>
                            <option value="7">class 7</option>
                            <option value="8">class 8</option>
                            <option value="9">class 9</option>
                            <option value="10">class 10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">Student City:</label>
                        <input type="text" name="city" placeholder="type city here" id="roll" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Parents Contact:</label>
                        <input type="text" name="contact" placeholder="01*********" id="contact" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}" required>
                    </div>
                    <div class="form-group">
                        <label for="picture">Upload Your Photo:</label>
                        <input type="file" name="picture" id="picture" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary offset-9" value="Add" style="padding: 5px 50px">
                    </div>
                </form>
            </div>
        </div>
        </div>
    <div class="container p-0">
        <?php require_once 'footer.php'?>
    </div>



</body>
</html>