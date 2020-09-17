<?php
require_once 'dbcon.php';

if (!isset($_SESSION['user_login'])){
    header("location: login.php");
}
$id = base64_decode($_GET['id']);

$delete = mysqli_query($conn, "DELETE FROM `studentinfo` WHERE `id`='$id'");

if (isset($delete)) {
    header('location: index.php?page=update-student');
}




