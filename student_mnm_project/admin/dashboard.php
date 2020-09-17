
<div class="col-sm-9">
    <h1 class="text-primary"><i class="fas fa-tachometer-alt"> Dashboard <small style="color: #847f7f">Statistics Overview</small></i></h1>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0" style="font-size: 13px"><i class="fas fa-tachometer-alt"></i> Dashboard</span>
    </nav>
    <br>
    <?php

    $student = mysqli_query($conn, "SELECT * FROM `studentinfo`");
    $student_row = mysqli_num_rows($student);

    ?>
    <div class="row">
        <div class="col-sm-4">
            <div class="card bg-primary" style="width: 16rem;">
                <div class="card-header">
                    <div class="one d-flex text-white">
                        <i class="fas fa-users fa-4x text-white" style="margin-top: 10px"></i>
                        <h1 style="margin: 20px 0 0 80px;" ><?= $student_row ?></h1>
                    </div>
                    <p style="margin: 0 0 0px 128px" class="text-white">All Students</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="index.php?page=all-student" class="text-decoration-none">View All Students</a><a href=""><i class="fas fa-chevron-circle-right" style="margin-left: 70px"></i></a></li>
                </ul>
            </div>
        </div>

        <?php

        $all_user = mysqli_query($conn, "SELECT * FROM `users`");
        $user_row = mysqli_num_rows($all_user);

        ?>

        <div class="col-sm-4">
            <div class="card bg-warning" style="width: 16rem;">
                <div class="card-header">
                    <div class="one d-flex">
                        <i class="fas fa-users fa-4x text-white" style="margin-top: 10px"></i><h1 style="margin: 20px 0 0 80px; color: white"><?= $user_row ?></h1>
                    </div>
                    <p style="margin: 0 0 0px 128px" class="text-white">All User</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="index.php?page=all-user" class="text-decoration-none text-warning">View All User</a><a href=""><i class="fas fa-chevron-circle-right text-warning" style="margin-left: 70px"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <h4>New Students:</h4>
    <div class="table-responsive">
        <table class="table table-bordered text-center table-hover" id="data">
            <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Roll</th>
                <th scope="col">Class</th>
                <th scope="col">City</th>
                <th scope="col">Parents Contact</th>
                <th scope="col">Photo</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $scrap = mysqli_query($conn, "SELECT * FROM `studentinfo` ");
            while ($row = mysqli_fetch_assoc($scrap)){?>


            <tr>
                <th><?= $row['id']?></th>
                <td><?= ucwords($row['name'])?></td>
                <td><?= $row['roll']?></td>
                <td><?= $row['class']?></td>
                <td><?= ucwords($row['city'])?></td>
                <td><?= $row['parentscontact']?></td>
                <td><img style="width: 25%" src="images/<?= $row['photo']?>" alt="photo"></td>
            </tr>
                <?php
            }

            ?>

            </tbody>
        </table>
        <br>
    </div>
</div>