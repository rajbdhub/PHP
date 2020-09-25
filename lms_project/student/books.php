<?php
require_once 'header.php';
?>
<div class="col-sm-12 col-md-8" style="min-height: 550px;">
    <ul class="nav ">
        <!--HOME-->
        <li class="active-item"><a href="books.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Books</span></a></li>
        <div class="panel">
            <div class="panel-content">
                <form method="post" action="">
                    <div class="row pt-md">
                        <div class="form-group col-sm-9 col-lg-10">
                                                <span class="input-with-icon">
                                            <input type="text" class="form-control" id="lefticon" name="bookname" placeholder="Search" required>
                                            <i class="fa fa-search"></i>
                                        </span>
                        </div>
                        <div class="form-group col-sm-3  col-lg-2 ">
                            <button type="submit" name="search" class="btn btn-primary btn-block">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </ul>
    <?php

    if (isset($_POST['search'])){
        $bookname = $_POST['bookname'];
        ?>


        <div class="col-md-12">
            <div class="panel" style="height: 200px">
                <div class="panel-content col-md-6">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM `books` WHERE `book_name` LIKE '%$bookname%'");
                    $temp = mysqli_num_rows($result);
                    if ($temp > 0){ ?>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)){?>

                    <img width="80px" src="../images/books/<?= $row['book_image'] ?>" alt="">
                    <p style="margin: 0; font-weight: bold">Book Name:  <?= ucwords($row['book_name']) ?></p>
                    <span style="font-weight: bold">Available: <?= $row['available_quantity'] ?></span>
                </div>
                <?php
                }
                ?>

                    <?php

                    }else{
                        echo "<h1 class='text-danger'>Books Not Found!</h1>";
                    } ?>

            </div>
        </div>
            <?php
    }else {?>

        <div class="col-md-12">
            <div class="panel" style="height: 200px">
                <div class="panel-content col-md-6">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM `books`");
                    while ($row = mysqli_fetch_assoc($result)){?>

                    <img width="80px" src="../images/books/<?= $row['book_image'] ?>" alt="">
                    <p style="margin: 0; font-weight: bold">Book Name:  <?= ucwords($row['book_name']) ?></p>
                    <span style="font-weight: bold">Available: <?= $row['available_quantity'] ?></span>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

    <?php

    }

    ?>

</div>

<?php
require_once 'header.php';
?>
