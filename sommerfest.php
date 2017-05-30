<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>ZugDirekt | Sommerfest</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php include 'imports.php' ?>
</head>

<body>


<?php include 'navbar.php'; ?>

<!-- Page Header -->
<section class="page_header container waypoint">
    <div class="page_header_inner">
        <!-- Header -->
        <h1 class="fixed-text hometext condensed white bold t-center">
            <div class="contact-form">
            <!-- Form -->
            <form id="contact-us" method="post" action="php/mail.php">
                <!-- Left Inputs -->
                <div class="col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="300">
                    <!-- Name -->
                    <input type="text" name="name" id="name" required="required" class="form light"
                           placeholder="Name"/>
                    <!-- Subject -->
                  <h4>Ich kann kommen:</h4>
                  <div class="btn-group btn-toggle" data-toggle="buttons">
                      <label class="btn btn-success active">
                        <input type="radio" name="options" value="ja"> Ja
                      </label>
                      <label class="btn btn-default">
                        <input type="radio" name="options" value="nein" checked=""> Nein
                      </label>
                    </div>
                </div><!-- End Left Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <button type="submit" id="submit" name="submit" class="form-btn light">Rückmeldung abschicken</button>
                </div><!-- End Bottom Submit -->
                <!-- Clear -->

                <div class="clear"></div>
            </form>

            <!-- Your Mail Message -->
            <div class="mail-message-area">
                <!-- Message -->
                <div class="alert gray-bg mail-message not-visible-message">
                    <strong>Vielen Dank!</strong> Die E-Mail wurde versendet.
                </div>
            </div>

        </div><!-- End Contact Form Area -->
        </h1>
    </div>
</section><!-- End Page Header -->


<section id="shortcodes" class="container">
    <!-- Pricing Tables -->
    <div class="inner_s">

        <!-- Two Column -->
        <div class="t-left">
            <div class="col-xs-12 mrg">

            </div>
            <div class="clear"></div>

        </div>


</section><!-- End Short Codes -->


<?php include 'footer.php'; ?>

</body>

</html>
