<?php
require_once '../dbcon.php';

if (!isset($_SESSION['email'])){
    header('location: sign-in.php');
}


?>

<?php require_once 'header.php'?>
    <!--Body part-->
    <!-- ========================================================= -->
                            <div class="col-sm-12 col-md-8" style="min-height: 550px;">
                                <ul class="nav ">
                                    <!--HOME-->
                                    <li class="active-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Issued Books</span></a></li>
                                </ul>

                                <div class="row animated fadeInUp">
                                    <div class="col-sm-12">
                                        <h4 class="section-subtitle"><b>Issued Books:</b></h4>
                                        <div class="panel">
                                            <div class="panel-content">
                                                <div class="table-responsive">
                                                    <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>Book Name</th>
                                                            <th>Book Image</th>
                                                            <th>Book Issue Date</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $student_id = $_SESSION['student_id'];
                                                      $result =  mysqli_query($conn, "SELECT `issue_book`. `book_issue_date`, `books`.`book_name`, `books`.`book_image`
                                                                                    FROM `books`
                                                                                    INNER JOIN `issue_book` ON `issue_book`.`book_id` = `books`.`id` WHERE `issue_book`.`student_id` = '$student_id'");

                                                      while ($row = mysqli_fetch_assoc($result)){?>
                                                          <tr>
                                                              <td><?= $row['book_name']?></td>
                                                              <td><img width="50px" src="../images/books/<?= $row['book_image']?>" alt=""></td>
                                                              <td><?= $row['book_issue_date']?></td>

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
                            </div>






                            <div class="col-sm-12 col-md-12">
                                <?php require_once 'footer.php'?>
                            </div>
