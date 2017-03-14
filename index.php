<!DOCTYPE html>
<html lang="de">
<head>
    <title>ZugDirekt</title>
    <?php include 'imports.php' ?>
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- Home Section -->

<section id="home">
    <div id="slides" class="home parallax pattern-black">
        <div class="home-details">

        <!-- Easter Egg Link -->
        <a href="happytosayhello.php"><font color="#000000">.</a></font></p>

            <!-- Your Logo -->
            <div class="logo animated" data-animation="fadeInUp" data-animation-delay="500">
                <img id="logo" src="images/logo-icon.svg" alt="Logo"/>
            </div>
            <div class="animated" data-animation="fadeInUp" data-animation-delay="400">
                <div class="hometexts">
                    <!-- Slide Texts -->
                    <ul class="fixed-text condensed">
                        <li class="hometext bold uppercase">ZugDirekt</li>
                    </ul>
                </div>
                <h1 class="fixed-text uppercase bold condensed">Home Of <span id="toswitch"
                                                                              class="colored">Creativity</span></h1>
                <!-- Home Categories -->
                <ul class="home-categories">
                    <li class="h-item uppercase ">cinematography</li>
                    <li class="h-item uppercase ">photography</li>
                    <li class="h-item uppercase ">web design</li>
                </ul>






                <!-- Bottom Arrow -->
                <a href="#upcoming" class="home-arrow scroll uppercase bold animated" data-animation="fadeInUp"
                   data-animation-delay="1500">
                    <img src="images/arrow-down.svg" width="60px"/>
                    <!--<span>what we do ?</span>-->
                </a>
            </div>
        </div><!-- End Home Texts -->
    </div><!-- End Home Details -->
</section><!-- End Home Section -->

<section id="upcoming" class="container waypoint">
    <!-- Team Inner -->
    <div class="inner team">
        <!--  DeHeader -->
        <h1 class="header semibold dark title">Upcoming: Emma Turing</h1>

        <!--scription -->
        <h4 class="dark">Vorschau zum neuesten Projekt<span class="dark bold"></span>
        </h4>
        <!-- Members -->
        <div class="team-members inner-details">
            <!-- Member -->
            <div class="col-xs-6 col-lg-7 col-centered member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image" href="emmaturing.php">
                        <!-- Img -->
                        <img src="images/covers/emmaturing.jpg" class="blackandwhite tocolor" alt=""/>
                    </a>
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->
            <div class="clear"></div>
        </div><!-- End Members -->
    </div><!-- End Team Inner -->
</section><!-- End Team Section -->
<section id="contact" class="container parallax5">
    <!-- Contact Inner -->
    <div class="inner team">
        <!--  DeHeader -->
        <h1 class="header semibold white title">Filmprojekte</h1>

        <!--scription -->
        <h4 class="white">Hintergrundinformationen. Videos. Fotos. Texte.<span class="dark bold"></span></h4>
        <!-- Members -->
        <div class="team-members inner-details">
            <!-- Member -->
            <div class="col-xs-4 col-sm-6 col-md-6 col-lg-3 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image" href="ruby.php">
                        <!-- Img -->
                        <img src="images/covers/ruby.jpg" class="blackandwhite tocolor" alt=""/>
                    </a>
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 col-sm-6 col-md-6 col-lg-3 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image" href="symbiose.php">
                        <!-- Img -->
                        <img src="images/covers/symbiose.jpg" class="blackandwhite tocolor" alt=""/>
                    </a>
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 col-sm-6 col-md-6 col-lg-3 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image" href="maerchenminuten.php">
                        <!-- Img -->
                        <img src="images/covers/maerchen.jpg" class="blackandwhite tocolor" alt=""/>
                    </a>
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->

            <div class="col-xs-4 col-sm-6 col-md-6 col-lg-3 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image" href="ichbinjulia.php">
                        <!-- Img -->
                        <img src="images/covers/ichbinjulia.jpg" class="blackandwhite tocolor" alt=""/>
                    </a>
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->
            <div class="clear"></div>
        </div><!-- End Members -->
    </div><!-- End Team Inner -->
</section><!-- End Contact Section -->

<!-- Contact Section -->
<section id="contact" class="container parallax5">
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

<!-- Site Socials and Address -->
<section id="site-socials" class="no-padding white-bg">
    <div class="site-socials inner no-padding">
        <!-- Socials -->
        <div class="socials">
            <a href="https://www.youtube.com/channel/UCz8nYHoQJ29rSXEeftnJpvg" target="_blank" class="social">
                <i class="fa fa-2x fa-youtube-play"></i>
            </a>
            <a href="https://www.instagram.com/zugdirekt/" target="_blank" class="social">
                <i class="fa fa-2x fa-instagram"></i>
            </a>
            <a href="https://vimeo.com/amonritz" target="_blank" class="social">
                <i class="fa fa-2x fa-vimeo-square"></i>
            </a>

        </div>
        <!-- Adress, Mail -->
        <div class="address">
            <!-- Phone Number, Mail -->
            <p>
                <a href="mailto:&#109;&#097;&#105;&#108;&#064;&#122;&#117;&#103;&#100;&#105;&#114;&#101;&#107;&#116;&#046;&#099;&#111;&#109;"
                   class="bold dark">&#109;&#097;&#105;&#108;&#064;&#122;&#117;&#103;&#100;&#105;&#114;&#101;&#107;&#116;&#046;&#099;&#111;&#109;</a>
            </p>
            <!-- Adress -->
            <p><span class="bold colored">Zuhause in München</span></p>
            <!-- Top Button -->
            <a href="#home" class="scroll top-button">
                <i class="fa fa-angle-double-up"></i>
            </a>
        </div><!-- End Adress, Mail -->
    </div><!-- End Inner -->
</section><!-- End Site Socials and Address -->

<?php include 'footer.php' ?>

</body>

</html>