
<?php
require_once 'header.php';
?>
<div class="col-sm-12 col-md-8" style="min-height: 550px;">
    <ul class="nav ">
        <!--HOME-->
        <li class="active-item"><a href="students.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Return Books</span></a></li>

        <div class="row animated fadeInUp">
            <div class="col-sm-12">
                <h4 class="section-subtitle"><b>Return Books:</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Phone</th>
                                    <th>Book Name</th>
                                    <th>Book Image</th>
                                    <th>Book Issue Date</th>
                                    <th>Return Book</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = mysqli_query($conn, "SELECT `issue_book`.`id`, `issue_book`.`book_id`, `issue_book`.`book_issue_date`, `students`.`firstname`, `students`.`lastname`, `students`.`roll`, `students`.`phone`, `books`.`book_name`, `books`.`book_image`
FROM `issue_book`
INNER JOIN `students` ON `students`.`id` = `issue_book`.`student_id`
INNER JOIN `books` ON `books`.`id` = `issue_book`.`book_id` 
WHERE `issue_book`.`book_return_date` = '' " );
                                while ($row = mysqli_fetch_assoc($query)){

                                    ?>
                                    <tr>
                                        <td><?= ucwords($row['firstname'] . ' '.$row['lastname']) ?></td>
                                        <td><?= $row['roll'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= ucwords($row['book_name']) ?></td>
                                        <td><img width="50px" src="../images/books/<?= $row['book_image'] ?>" alt="Image"></td>
                                        <td><?= $row['book_issue_date'] ?></td>
                                        <td><a href="return-book.php?id=<?= base64_encode($row['id']) ?>&bookid=<?= base64_encode($row['book_id']) ?>" class="btn btn-primary">Return Book</a></td>
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
<?php

if (isset($_GET['id'])){
    $id = base64_decode($_GET['id']);
    $book_id =base64_decode($_GET['bookid']);
    $date = date('d-m-Y');
    $query = mysqli_query($conn, "UPDATE `issue_book` SET `book_return_date`= '$date' WHERE `id` = '$id'");

    if ($query){
        mysqli_query($conn, "UPDATE `books` SET `available_quantity`= `available_quantity` + 1 WHERE `id` = '$book_id'");
        ?>
        <script>
            alert('Return Book successful!');
            window.location="return-book.php";
        </script>

    <?php }else{
    ?>
        <script>
            alert('Return Book not successful!');
            window.location="return-book.php";
        </script>
        <?php

    }

}

?>



    </ul>
</div>
<div class="col-sm-12 col-md-12">
    <?php require_once 'footer.php'?>
</div>
