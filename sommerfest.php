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
		Sommerfest 2017
        </h1>
    </div>
</section><!-- End Page Header -->

<section id="contact" class="container" style="margin-top: -15px;">
    <!-- Contact Inner -->
    <div class="inner contact">

        <!-- Header -->
        <h1 class="header semibold white title">Rückmeldung zum ZugDirekt Sommerfest</h1>
	<h2 class="header semibold white title">27. Juni 2017, 20 Uhr</h2>
	<h2 class="header semibold white title">Giesinger Bahnhofsplatz 1, 81539 München</h2>
        <!-- Description -->
        <h4 class="h-desc white contact-text"></h4>

        <!-- Form Area -->
        <div class="contact-form">
            <!-- Form -->
            <form id="contact-us" method="post" action="php/mail.php">
                <!-- Left Inputs -->
                <div class="col-xs-12 animated" data-animation="fadeInLeft" data-animation-delay="300">
                    <!-- Name -->
                    <input type="text" name="name" id="name" required="required" class="form light"
                           placeholder="Mein Name" required />
                    <!-- Email -->
                    <input type="hidden" name="mail" id="mail" required="required" class="form light"
                           value="Keine Email-Adresse"/>
                    <!-- Subject -->
                    <input type="hidden" name="subject" id="subject" required="required" class="form light"
                           value="Rückmeldung Sommerfest"/>
		    <h4 style="color: #fff">Ich kann kommen:</h4>
				<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-default active">
				<input type="radio" name="message" value="YES, ich kann kommen.">Ja &nbsp;
			</label>
			<label class="btn btn-default">
				<input type="radio" name="message" value="Ich kann NICHT kommen.">Nein
			</label>
      			</div>
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
		<!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
			<br> 
                    <button type="submit" id="submit" name="submit" class="form-btn light">Abschicken</button>
                </div><!-- End Bottom Submit -->
                <!-- Clear -->
		    

                <div class="clear"></div>
            </form>

            <!-- Your Mail Message -->
            <div class="mail-message-area">
                <!-- Message -->
                <div class="alert gray-bg mail-message not-visible-message">
                    <strong>Vielen Dank!</strong> Die Rückmeldung wurde abgeschickt.
                </div>
            </div>

        </div><!-- End Contact Form Area -->
    </div><!-- End Inner -->
</section><!-- End Contact Section -->


<?php include 'footer.php'; ?>
</body>

</html>
