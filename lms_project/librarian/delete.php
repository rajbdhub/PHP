<?php

require_once '../dbcon.php';

if (isset($_GET['delete'])){
    $id = base64_decode($_GET['delete']);
    $delete = mysqli_query($conn, "DELETE FROM `books` WHERE `id` = '$id'");
    header('location: manage-books.php');

}





?>