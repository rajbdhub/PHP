

<?php require_once 'dbcon.php'; ?>



<!-- Contact Form -->
<div class="col-xs-12 col-sm-8">
    <div id="map" class="map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d945016.1370802115!2d88.57337522921482!3d22.298084933777606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a01c04a7900b59b%3A0x60f9e2cc82a23906!2sSatkhira%20District!5e0!3m2!1sen!2sbd!4v1601707836163!5m2!1sen!2sbd" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="block-title">
        <h3>How Can I <span>Help You?</span></h3>
    </div>

    <form id="contact_form" class="contact-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

<div class="messages"></div>

        <div class="controls two-columns">
            <div class="fields clearfix">
                <div class="left-column">
                    <div class="form-group form-group-with-icon">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                        <label>Full Name</label>
                        <div class="form-control-border"></div>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group form-group-with-icon">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                        <label>Email Address</label>
                        <div class="form-control-border"></div>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group form-group-with-icon">
                        <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                        <label>Subject</label>
                        <div class="form-control-border"></div>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="right-column">
                    <div class="form-group form-group-with-icon">
                        <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                        <label>Message</label>
                        <div class="form-control-border"></div>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <!--<div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>-->

            <button type="submit" name="send" class="button btn "><i class="fa fa-floppy-o" aria-hidden="true"></i>
                Send Message</button>

        </div>

    </form>

</div>
<?php

if (isset($_POST['send'])){
    $to = 'official2050@yahoo.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'Form : $email';

    $query = mysqli_query($conn, "INSERT INTO `clientsinfo`(`name`, `email`) VALUES ('$name', '$email')");

    $send = mail( $to, $subject, $message, $headers);

    if ($send){

        ?>
        <script>
            alert('Email Send successful!');
            window.location="contact.php";
        </script>

    <?php }else{
        ?>
        <script>
            alert('Email send not successful!');
            window.location="contact.php";
        </script>
        <?php

    }

}




?>


