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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project API</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="card mt-2 mb-3">
		<div class="card-body">
		<p id="p-area" class="font-weight-bold">Hello there<br><br>I can&nbsp;&nbsp;accurately and professionally as well as faster. we can discuss more details in message inbox.<br><br>Best Regards<br>Mayaraj Mahabub (Raj)
		</p>
		</div>
		</div>
	</div>
</body>
</html>

