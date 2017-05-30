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
<section id="contact" class="container" style="margin-top: -15px;">
    <!-- Contact Inner -->
    <div class="inner contact">

        <!-- Header -->
        <h1 class="header semibold white title">Kontakt</h1>

        <!-- Description -->
        <h4 class="h-desc white contact-text"></h4>

        <!-- Form Area -->
        <div class="contact-form">
            <!-- Form -->
            <form id="contact-us" method="post" action="php/mail.php">
                <!-- Left Inputs -->
                <div class="col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="300">
                    <!-- Name -->
                    <input type="text" name="name" id="name" required="required" class="form light"
                           placeholder="Name"/>
                    <!-- Email -->
                    <input type="email" name="mail" id="mail" required="required" class="form light"
                           placeholder="Email-Adresse"/>
                    <!-- Subject -->
                    <input type="text" name="subject" id="subject" required="required" class="form light"
                           placeholder="Betreff"/>
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class="col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="300">
                    <!-- Message -->
                    <textarea name="message" id="message" class="form textarea light"
                              placeholder="Nachricht"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <button type="submit" id="submit" name="submit" class="form-btn light">Nachricht abschicken</button>
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
    </div><!-- End Inner -->
</section><!-- End Contact Section -->
	
<script type="text/javascript">
$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});

$('form').submit(function(){
	alert($(this["options"]).val());
    return false;
});    
    
</script>

<?php include 'footer.php'; ?>

    
</body>

</html>
