<?php

require_once 'header.php';



if(isset($_POST['submit'])){
    $knowledgeone = $_POST['one'];
    $knowledgetwo = $_POST['two'];
    $knowledgethree = $_POST['three'];
    $knowledgefour = $_POST['four'];
    $knowledgefive = $_POST['five'];
    $knowledgesix = $_POST['six'];
    $knowledgeseven = $_POST['seven'];
    $knowledgeeight = $_POST['eight'];
    $knowledgenine = $_POST['nine'];
    $knowledgeten = $_POST['ten'];
    $knowledgeeleven = $_POST['eleven'];
    $knowledgetwelve = $_POST['twelve'];

    $result = mysqli_query($conn, "INSERT INTO `resume`(`knowledgeone`, `knowledgetwo`, `knowledgethree`, `knowledgefour`, `knowledgefive`, `knowledgesix`, `knowledgeseven`, `knowledgeeight`, `knowledgenine`, `knowledgeten`, `knowledgeeleven`, `knowledgetwelve`) VALUES ('$knowledgeone', '$knowledgetwo', '$knowledgethree', '$knowledgefour', '$knowledgefive', '$knowledgesix', '$knowledgeseven', '$knowledgeeight', '$knowledgenine', '$knowledgeten', '$knowledgeeleven', '$knowledgetwelve')");

    if ($result){

        ?>
        <script>
            alert('Input successful!');
            window.location="resume.php";
        </script>

    <?php }else{
        ?>
        <script>
            alert('Input not successful!');
            window.location="resume.php";
        </script>
        <?php

    }
}

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=hh, initial-scale=1.0">
        <title>Admin</title>
    </head>
    <body>


    <div class="home">
        <div class="first mb-md">
            <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard > Resume Page</span></a>
        </div>

        <div class="col-md-8 panel">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" method="post">
                            <h5 class="mb-lg text-bold">Resume Page:</h5>
                            <div class="form-group">
                                <label for="Knowledgeone " class="col-sm-4 control-label">Knowledge 1 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="Knowledgeone" name="one" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledgetwo" class="col-sm-4 control-label">Knowledge 2 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="two" id="Knowledgetwo" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge3" class="col-sm-4 control-label">Knowledge 3 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="three" id="Knowledge3" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge4" class="col-sm-4 control-label">Knowledge 4 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="four" id="Knowledge4" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge5" class="col-sm-4 control-label">Knowledge 5 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="five" id="Knowledge5" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge6" class="col-sm-4 control-label">Knowledge 6 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="six" id="Knowledge6" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge7" class="col-sm-4 control-label">Knowledge 7 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="seven" id="Knowledge7" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge8" class="col-sm-4 control-label">Knowledge 8 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="eight" id="Knowledge8" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge9" class="col-sm-4 control-label">Knowledge 9 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nine" id="Knowledge9" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge10" class="col-sm-4 control-label">Knowledge 10 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="ten" id="Knowledge10" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge11" class="col-sm-4 control-label">Knowledge 11 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="eleven" id="Knowledge11" placeholder="Choose a Category" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Knowledge12" class="col-sm-4 control-label">Knowledge 12 :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="twelve" id="Knowledge12" placeholder="Choose a Category" >
                                </div>
                            </div>

                            <div class="form-group pull-right">
                                <div class="col-sm-offset-2 col-sm-8" style="margin-right: 22px">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                        Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>

        </div>
    </div>

    </body>
    </html>




<?php require_once 'footer.php' ?>