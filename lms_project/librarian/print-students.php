<?php

require_once '../dbcon.php';
$result = mysqli_query($conn, "SELECT * FROM `students`");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <title>Print</title>
    <style type="text/css">
        body {
            margin: 0;
        }
        .print {
            width: 755px;
            height: 1050px;
            box-sizing: border-box;
            page-break-after: always;
        }
        .header h2, h3, .page {
            text-align: center;
        }

        .header h3 {
            margin: 0 0 15px 0;
        }


    </style>
</head>
<body onload="window.print()">
<div class="container">

    <?php

    $serial = 1;
    $page = 1;
    $total = mysqli_num_rows($result);
    $per_page = 20;
    while ($row = mysqli_fetch_assoc($result)){
        if ($serial % $per_page == 1){
            echo page_header();
        }

        ?>

        <tr>
            <td><?= $serial ?></td>
            <td><?= $row['firstname'] ?></td>
            <td><?= $row['lastname'] ?></td>
            <td><?= $row['class'] ?></td>
            <td><?= $row['roll'] ?></td>
            <td><?= $row['reg_no'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['status'] ?></td>
        </tr>

    <?php

        if ($serial % $per_page == 0 || $total == $per_page){
            echo page_footer($page++);
        }

        $serial ++;
    }

    ?>





</div>

</body>
</html>
<?php
function page_header(){
    $data = '
        
        <div class="print">
        <div class="header">
            <h2>Library Management System</h2>
            <h3>Satkhira</h3>
        </div>
        <div class="body">
            <table class="table table-bordered">
                <tr>
                    <th>Serial NO</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Class</th>
                    <th>Roll</th>
                    <th>Registration NO</th>
                    <th>Phone NO</th>
                    <th>Status NO</th>
                </tr>
    
    ';
    return $data;
}
function page_footer($page){
    $data = '
    
             </table>
        </div>
        <div class="page">
            <p>Page: '.$page.'</p>
        </div>
    </div>
    
    ';
    return $data;
}



?>
