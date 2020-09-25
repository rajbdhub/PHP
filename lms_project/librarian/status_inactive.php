<?php
require_once '../dbcon.php';

$id = base64_decode($_GET['id']);

$action = mysqli_query($conn, "UPDATE `students` SET `status` = '0' WHERE `id` = '$id'");

header('location: students.php');

?>