<?php
require_once '../dbcon.php';

if (!isset($_SESSION['email'])){
    header('location: login.php');
}

if (isset($_POST['issue_book'])){
    $name = $_POST['student_name'];
    $id = $_POST['student_id'];
    $book_id = $_POST['book_id'];
    $date = $_POST['book_issue_date'];

    $book_query = mysqli_query($conn, "INSERT INTO `issue_book`(`student_id`, `student_name`, `book_id`, `book_issue_date`) VALUES ('$id', '$name', '$book_id', '$date')");

    if ($book_query){
        mysqli_query($conn, "UPDATE `books` SET `available_quantity`= `available_quantity` - 1 WHERE `id` = '$book_id'");
        ?>
        <script>
            alert('Issued Book successful!');
            window.location="issue-book.php";
        </script>

    <?php }else{
        ?>
        <script>
            alert('Issued Book not successful!');
            window.location="issue-book.php";
        </script>
        <?php

    }

    }

?>

<?php require_once 'header.php'?>
<!--Body part-->
<!-- ========================================================= -->
<div class="col-sm-12 col-md-8" style="min-height: 550px;">
    <ul class="nav ">
        <!--HOME-->
        <li class="active-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Issue Book</span></a></li>
    </ul>
    <div class="row animated fadeInUp col-md-8">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-inline" method="post" action="">
                                <h5 class="mb-lg ">Search Student</h5>
                                <div class="form-group">

                                    <select class="form-control" name="student_id" id="" >
                                        <option value="" >Select</option>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM `students`" );
                                        while ($row = mysqli_fetch_assoc($query)){?>
                                        <option value="<?= $row['id'] ?>"><?= ucwords($row['firstname']. ' ' .$row['lastname']).' - '. '('. $row['roll'] .')' ?>
                                        </option>
                                        <?php
                                        }

                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="search" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php

            if (isset($_POST['search'])){
                $id = $_POST['student_id'];
                $query = mysqli_query($conn, "SELECT * FROM `students` WHERE `id` = '$id' AND `status` = '1'" );
                $row = mysqli_fetch_assoc($query);
                ?>

                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label for="name">Student Name</label>
                                    <input type="text" class="form-control" id="name" name="student_name" value="<?= ucwords($row['firstname']. ' ' .$row['lastname']) ?>" readonly >
                                    <input type="text" name="student_id" value="<?= $row['id'] ?>" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="bookname">Book Name</label>
                                    <select class="form-control" name="book_id" id="bookname">
                                        <option value="" >Select Book</option>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM `books` WHERE `available_quantity` > 0" );

                                        while ($row = mysqli_fetch_assoc($query)){?>
                                            <option value="<?= $row['id'] ?>"><?= $row['book_name'] ?></option>
                                            <?php
                                        }

                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date">Book Issue Date</label>
                                    <input type="text" class="form-control" name="book_issue_date" id="date" value="<?= date('d-m-Y')  ?>" readonly >
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="issue_book">Issue Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <?php


            }

            ?>
    </div>
</div>



<div class="col-sm-12 col-md-12">
    <?php require_once 'footer.php'?>
</div>


