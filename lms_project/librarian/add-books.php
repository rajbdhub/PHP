

<?php require_once 'header.php'?>

<?php

if (isset($_POST['save'])){
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $publicationname = $_POST['p_name'];
    $purchasedate = $_POST['purchasedate'];
    $bookprice = $_POST['bookprice'];
    $bookquantity = $_POST['bookquantity'];
    $availabelquantity = $_POST['availabelquantity'];
    // Got the username from session/ login.php
    $libraian_username = $_SESSION['libraian_username'];

    $bookimage = explode('.', $_FILES['image']['name']);
    $pht = end($bookimage);
    $image = $author. '.' .$pht;

    $query = mysqli_query($conn, "INSERT INTO `books`(`book_name`, `book_image`, `book_author_name`, `book_publication_name`, `book_purchase_date`, `book_price`, `book_quantity`, `available_quantity`, `libraian_username`) VALUES ('$bookname', '$image', '$author', '$publicationname', '$purchasedate', '$bookprice', '$bookquantity', '$availabelquantity', '$libraian_username' )");

    if ($query){
        move_uploaded_file($_FILES['image']['tmp_name'], '../images/books/'.$image);
        ?>
        <script>
            alert('Registration successful!');
            window.location="add-books.php";
        </script>

    <?php }else{
    ?>
    <script>
        alert('Registration not successful!');
        window.location="add-books.php";
    </script>
    <?php

}

}

?>
<!--Body part-->
<!-- ========================================================= -->
<div class="col-sm-12 col-md-8" style="min-height: 550px;">
    <ul class="nav ">
        <!--HOME-->
        <li class="active-item"><a href="add-books.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Add Book</span></a></li>
    </ul>

    <div class="panel col-md-8 col-md-offset-2 mt-md">
        <div class="panel-content">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <h5 class="mb-lg">Add Book</h5>
                        <div class="form-group">
                            <label for="book_name " class="col-sm-4 control-label">Book Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="book_name" name="bookname" placeholder="book name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="book_image" class="col-sm-4 control-label">Book Image</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="image" id="book_image" placeholder="book image" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="author" class="col-sm-4 control-label">Author Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="author" id="author" placeholder="author name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p_name" class="col-sm-4 control-label">Publication Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="p_name" id="p_name" placeholder="publication name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="purchase" class="col-sm-4 control-label">Purchase Date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="purchasedate" id="purchase" placeholder="purchase date" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-sm-4 control-label">Book Price</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="bookprice" id="price" placeholder="book price" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="col-sm-4 control-label">Book Quantity</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="bookquantity" id="quantity" placeholder="book quantity" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="available" class="col-sm-4 control-label">Available Quantity</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="available" name="availabelquantity" placeholder="available quantity" required>
                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                    Save Book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-sm-12 col-md-12">
    <?php require_once 'footer.php'?>
</div>