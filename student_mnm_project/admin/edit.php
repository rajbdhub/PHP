<?php

require_once 'dbcon.php';

if (!isset($_SESSION['user_login'])){
    header("location: login.php");
}
$id = base64_decode($_GET['id']);

$edit = mysqli_query($conn, "SELECT * FROM `studentinfo` WHERE `id` = '$id'");

$scrap = mysqli_fetch_assoc($edit);

if (isset($_POST['submit'])){
$name = $_POST['name'];
$roll = $_POST['roll'];
$class = $_POST['class'];
$city = $_POST['city'];
$contact = $_POST['contact'];

$query = mysqli_query($conn, "UPDATE `studentinfo` SET `name`='$name',`roll`='$roll',`class`='$class',`city`='$city',`parentscontact`='$contact' WHERE `id` = '$id'");

if (isset($query)){
    ?>
    <script>
        alert('Update successfully!');
        window.location="index.php?page=add-student";
    </script>

<?php }else{
    ?>
    <script>
        alert('Update not successful!');
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
        <h1 class="text-primary"><i class="fas fa-user-plus"> Edit Student <small style="color: #847f7f">Edit Student Info</small></i></h1>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0" style="font-size: 13px"><a href="index.php?page=dashboard" class="text-decoration-none"><i class="fas fa-tachometer-alt"></i> Dashboard</a></span>
        </nav>
        <br>
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Student Name:</label>
                    <input type="text" name="name" placeholder="type name here" id="name" class="form-control" value="<?=$scrap['name']?>" required>
                </div>
                <div class="form-group">
                    <label for="roll">Student Roll:</label>
                    <input type="text" name="roll" placeholder="type roll here" id="roll" class="form-control" value="<?=$scrap['roll']?>" required>
                </div>
                <div class="form-group">
                    <label for="class">Student Class:</label>
                    <br>
                    <select class="form-control" name="class" id="class" required>
                        <option value="0">Select</option>
                        <option <?php echo $scrap['class']== 1 ? 'selected=""' : ''; ?> value="1">Class 1</option>
                        <option <?php echo $scrap['class']== 2 ? 'selected=""' : ''; ?> value="2">class 2</option>
                        <option <?php echo $scrap['class']== 3 ? 'selected=""' : ''; ?> value="3">class 3</option>
                        <option <?php echo $scrap['class']== 4 ? 'selected=""' : ''; ?> value="4">class 4</option>
                        <option <?php echo $scrap['class']== 5 ? 'selected=""' : ''; ?> value="5">class 5</option>
                        <option <?php echo $scrap['class']== 6 ? 'selected=""' : ''; ?> value="6">class 6</option>
                        <option <?php echo $scrap['class']== 7 ? 'selected=""' : ''; ?> value="7">class 7</option>
                        <option <?php echo $scrap['class']== 8 ? 'selected=""' : ''; ?> value="8">class 8</option>
                        <option <?php echo $scrap['class']== 9 ? 'selected=""' : ''; ?> value="9">class 9</option>
                        <option <?php echo $scrap['class']== 10 ? 'selected=""' : ''; ?> value="10">class 10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="city">Student City:</label>
                    <input type="text" name="city" placeholder="type city here" id="roll" class="form-control" value="<?=$scrap['city']?>" required>
                </div>
                <div class="form-group">
                    <label for="contact">Parents Contact:</label>
                    <input type="text" name="contact" placeholder="01*********" id="contact" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}" value="<?=$scrap['parentscontact']?>" required>
                </div>

                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary offset-9" value="Update" style="padding: 5px 50px">
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