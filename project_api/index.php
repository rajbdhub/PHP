<?php
if (isset($_POST['send'])) {
    $url     = "https://www.freelancer.com/api/projects/0.1/projects/" . $_POST['id'];
    $project = json_decode(file_get_contents($url));
    
    if ($project) {
        $owner_id = $project->result->owner_id;
        if ($owner_id) {
            $url  = "https://www.freelancer.com/api/users/0.1/users/".$owner_id;
            $user = json_decode(file_get_contents($url));
            require_once "proposal.php";
        }

    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>API</title>
</head>
<body>
   <div class="container">
    <div class="card mt-5">
    <div class="d-flex justify-content-center mt-3 card-body">
        <form method="post">
        <label>
            <input class="bg-warning" type="text" name="id" required placeholder="">
        </label>
        <input type="submit" value="Send" name="send" class="btn btn-info">
    </form>
    </div>
    </div>
    <div class="para d-flex justify-content-center font-weight-bold">Input Valid Project ID</div>
    <br>
    <div class="d-flex justify-content-center">
    <?php if (isset($user)): ?>
        <table border="1" width="50%" class="text-center center d-flex justify-content-center p-3">
            <tr class="table-active">
                <th>Owner Id</th>
                <th>Public Name</th>
                <th>Username</th>
                <th>Title</th>
                <th>Country</th>
            </tr>
            <tr class="bg-success">
                <td><?= $project->result->owner_id; ?></td>
                <td><?= $user->result->public_name; ?></td>
                <td><?= $user->result->username; ?></td>
                <td><?= $project->result->title; ?></td>
                <td><?= $user->result->location->country->name; ?></td>
            </tr>
        </table>
    <?php endif; ?>
    </div>
   </div>
</body>
</html>
