<?php

require_once 'admin/dbcon.php'


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Student Management Project</title>
  </head>
  <body>



      <div class="container">
          <div class="d-flex justify-content-end">
            <a class="btn btn-primary mt-3" href="admin/login.php">Login Admin</a>
          </div>
          <div class="d-flex justify-content-end">
              <a class="btn btn-primary mt-3" href="admin/registration.php">Registration</a>
          </div>
          <h2 class="text-center mt-3">Welcome to Students Management System</h2>
         <div class="row">
             <div class="col-sm-6 offset-3 mt-5">
                 <form action="" method="post">
                     <table class="table table-bordered">
                         <tr>
                             <td colspan="2" class="text-center font-weight-bold"><lable>Student Information</lable></td>
                         </tr>

                         <tr>
                             <td><lable for="class">Choose Class</lable></td>
                             <td>
                                 <select class="form-control" name="class" id="class" required>
                                     <option value="0">Select</option>
                                     <option value="1">Class-1</option>
                                     <option value="2">Class-2</option>
                                     <option value="3">Class-3</option>
                                     <option value="4">Class-4</option>
                                     <option value="5">Class-5</option>
                                 </select>
                             </td>
                         </tr>

                         <tr>
                             <td><lable for="roll">Roll No</lable></td>
                             <td><input class="form-control" id="roll" type="text" name="roll" placeholder="Enter Valid Roll" required></td>
                         </tr>

                         <tr>
                             <td colspan="2" class="text-center"><input type="submit" name="submit" value="Show Info"></td>
                         </tr>

                     </table>
                 </form>
                 </div>
                 </div>
          <?php


          if (isset($_POST['submit'])){

              $class = $_POST['class'];
              $roll = $_POST['roll'];

        $student_info = mysqli_query($conn, "SELECT * FROM `studentinfo` WHERE `roll` = '$roll'");
        $scrap = mysqli_fetch_assoc($student_info);
        if (mysqli_num_rows($student_info)==0){?>

              <script type="text/javascript">
                  alert('Please input valid roll number');
              </script>

          <?php

        }else { ?>

                   <div class="row">
              <div class="col-sm-8 offset-2">
                  <table class="table table-bordered">
                      <tr>
                          <td rowspan="7" class="text-center">
                              <img style="margin-top: 55px" class="img-thumbnail" src="admin/images/<?= $scrap['photo']?>" alt=""></td>

          </tr>
          <tr>
              <td>Name</td>
              <td><?= $scrap['name'] ?></td>
          </tr>
          <tr>

              <td>Roll</td>
              <td><?= $scrap['roll'] ?></td>
          </tr>
          <tr>

              <td>Class</td>
              <td><?= $scrap['class'] ?></td>
          </tr>
          <tr>

              <td>City</td>
              <td><?= $scrap['city'] ?></td>
          </tr>
          <tr>

              <td>Parents Contact</td>
              <td><?= $scrap['parentscontact'] ?></td>
          </tr>
          <tr>

              <td>Status</td>
              <td class="font-weight-bold"><?= $scrap['status']==1 ? 'Active' : 'Inactive' ?></td>
          </tr>
          </table>
          <h4 class="text-danger text-center"><?php if(isset($error)){
                  echo $error;
              } ?></h4>
      </div>
      </div>
         </div>
      <?php
      }
      }

          ?>


      </div>


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

