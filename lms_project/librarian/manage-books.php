<?php

require_once 'header.php';
$query = mysqli_query($conn, "SELECT * FROM `books`" );

?>

<?php require_once 'header.php'?>
<!--Body part-->
<!-- ========================================================= -->
<div class="col-sm-12 col-md-9" style="min-height: 550px;">
    <ul class="nav ">
        <!--HOME-->
        <li class="active-item"><a href="manage-books.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Manage Books</span></a></li>
    </ul>
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
            <h4 class="section-subtitle"><b>Manage Books:</b></h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Book Name</th>
                                <th>Book Image</th>
                                <th>Author Name</th>
                                <th>Publication Name</th>
                                <th>Purchase Date</th>
                                <th>Book Price</th>
                                <th>Book Quantity</th>
                                <th>Available Quantity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($query)){

                                ?>
                                <tr>
                                    <td><?= ucwords($row['book_name']) ?></td>
                                    <td><img style="width: 50px;" src="../images/books/<?= $row['book_image'] ?>" alt="Image"></td>
                                    <td><?= $row['book_author_name'] ?></td>
                                    <td><?= $row['book_publication_name'] ?></td>
                                    <td><?= date('d-m-Y', strtotime($row['book_purchase_date'])) ?></td>
                                    <td><?= $row['book_price'] ?></td>
                                    <td><?= $row['book_quantity'] ?></td>
                                    <td><?= $row['available_quantity'] ?></td>
                                    <td>
                                        <a href="javascript:avoid(0)" class="btn btn-info" data-toggle="modal" data-target="#book-<?= $row['id'] ?>"><i class="fa fa-eye"></i></a>
                                        <a href="javascript:avoid(0)" class="btn btn-warning" data-toggle="modal" data-target="#book-update<?= $row['id'] ?>"><i class="fa fa-pencil"></i></a>
                                        <a href="delete.php?delete=<?= base64_encode($row['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                                    </td>


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
    foreach ($query as $row){?>
    <!-- Modal -->
    <div class="modal fade" id="book-<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="doinfo-modalcument">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Books Info</h4>
                </div>
                <div class="modal-body">

                        <table class="table table-bordered">
                            <tr>
                                <th>Book Name</th>
                                <td><?= $row['book_name'] ?></td>
                            </tr>

                            <tr>
                                <th>Book Image</th>
                                <td><img style="width: 50px;" src="../images/books/<?= $row['book_image'] ?>" alt="Image"></td>
                            </tr>
                            <tr>
                                <th>Author Name</th>
                                <td><?= $row['book_author_name'] ?></td>
                            </tr>
                            <tr>
                                <th>Publication Name</th>
                                <td><?= $row['book_publication_name'] ?></td>
                            </tr>

                            <tr>
                                <th>Purchase Date</th>
                                <td><?= date('d-m-Y', strtotime($row['book_purchase_date'])) ?></td>
                            </tr>
                            <tr>
                                <th>Book Price</th>
                                <td><?= $row['book_price'] ?></td>
                            </tr>
                            <tr>
                                <th>Book Quantity</th>
                                <td><?= $row['book_quantity'] ?></td>
                            </tr>
                            <tr>
                                <th>Available Quantity</th>
                                <td><?= $row['available_quantity'] ?></td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

    <!--Update- part-->

    <?php
    foreach ($query as $row){
        $id = $row['id'];
       $book_info = mysqli_query($conn, "SELECT * FROM `books` WHERE `id` = '$id'");
        $update = mysqli_fetch_assoc($book_info);

        ?>
        <!-- Modal -->
        <div class="modal fade" id="book-update<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
            <div class="modal-dialog" role="doinfo-modalcument">
                <div class="modal-content">
                    <div class="modal-header state modal-info">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modal-info-label"><i class="fa fa-pencil-square"></i>Book Update</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel">
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <label for="book_name ">Book Name</label>
                                                    <input type="text" class="form-control" id="book_name" name="bookname" placeholder="book name" value="<?= $row['book_name'] ?>" required>
                                                    <input type="hidden" class="form-control" id="id" name="id"  value="<?= $update['id'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="author">Author Name</label>
                                                    <input type="text" class="form-control" name="author" id="author" placeholder="author name" value="<?= $row['book_author_name'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_name">Publication Name</label>
                                                    <input type="text" class="form-control" name="p_name" id="p_name" placeholder="publication name" value="<?= $row['book_publication_name'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="purchase" >Purchase Date</label>
                                                    <input type="date" class="form-control" name="purchasedate" id="purchase" placeholder="purchase date" value="<?= $row['book_purchase_date'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Book Price</label>
                                                    <input type="text" class="form-control" name="bookprice" id="price" placeholder="book price" value="<?= $row['book_price'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="quantity">Book Quantity</label>
                                                    <input type="text" class="form-control" name="bookquantity" id="quantity" placeholder="book quantity" value="<?= $row['book_quantity'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="available">Available Quantity</label>
                                                    <input type="text" class="form-control" id="available" name="availabelquantity" placeholder="available quantity" value="<?= $row['available_quantity'] ?>" required>
                                            </div>
                                            <div class="form-group pull-right">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $bookname = $_POST['bookname'];
        $author = $_POST['author'];
        $publicationname = $_POST['p_name'];
        $purchasedate = $_POST['purchasedate'];
        $bookprice = $_POST['bookprice'];
        $bookquantity = $_POST['bookquantity'];
        $availabelquantity = $_POST['availabelquantity'];
        // Got the username from session/ login.php
        $libraian_username = $_SESSION['libraian_username'];


        $query = mysqli_query($conn, "UPDATE `books` SET `book_name`='$bookname',`book_author_name`='$author',`book_publication_name`='$publicationname',`book_purchase_date`='$purchasedate',`book_price`='$bookprice',`book_quantity`='$bookquantity',`available_quantity`='$availabelquantity',`libraian_username`='$libraian_username' WHERE `id` = '$id'");

        if ($query){

            ?>
            <script>
                alert('Update successful!');
                window.location="manage-books.php";
            </script>

        <?php }else{
        ?>
            <script>
                alert('Update not successful!');
                window.location="manage-books.php";
            </script>
            <?php

        }

    }
    ?>
</div>
<div class="col-sm-12 col-md-12">
    <?php require_once 'footer.php'?>
</div>