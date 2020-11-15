<?php
if (isset($_POST['send'])) {
    $url     = "https://www.freelancer.com/api/projects/0.1/projects/" . $_POST['id'];
    $project = json_decode(file_get_contents($url));
    if ($project) {
        $owner_id = $project->result->owner_id;
        if ($owner_id) {
            $url  = "https://www.freelancer.com/api/users/0.1/users/".$owner_id;
            $user = json_decode(file_get_contents($url));
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
    <title>API</title>
</head>
<body>
    <form method="post">
        <label>
            <input type="text" name="id" required placeholder="Project ID">
        </label>
        <input type="submit" value="Send" name="send">
    </form>
    <br>
    <br>
    <?php if (isset($user)): ?>
        <table border="1" width="50%">
            <tr>
                <th>Owner Id</th>
                <th>Public Name</th>
                <th>Username</th>
                <th>Title</th>
            </tr>
            <tr>
                <td><?= $project->result->owner_id; ?></td>
                <td><?= $user->result->public_name; ?></td>
                <td><?= $user->result->username; ?></td>
                <td><?= $project->result->title; ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>
