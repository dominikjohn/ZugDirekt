<!DOCTYPE html>
<html lang="de">
<head>

    <meta charset="utf-8"/>
    <title>ZugDirekt</title>
    <meta name="description" content="Film, Foto und Webdesign."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php include 'imports.php' ?>
</head>

<body>

<!-- Page Loader
<section id="pageloader">
    <div class="loader-item fa fa-spin colored-border"></div>
</section>
-->

<?php include 'navbar.php'; ?>

<!-- Home Section -->
<section id="home">
    <div id="slides" class="home parallax pattern-black">
        <div class="home-details">
            <!-- Your Logo -->
            <div class="logo animated" data-animation="fadeInUp" data-animation-delay="750">
                <img id="logo" src="images/logo-icon.svg" alt="Logo"/>
            </div>
            <div class="hometexts">
                <!-- Slide Texts -->
                <ul class="fixed-text condensed"> <!-- class="slide-text condensed" -->
                    <li class="hometext bold uppercase">ZugDirekt</li>
                    <!--<li class="hometext bold uppercase">We Love to <span class="colored"> Design</span></li>
                    <li class="hometext bold uppercase">We Are <span class="colored"> Creative</span></li>-->
                </ul>
            </div>
            <h1 class="fixed-text uppercase bold condensed">Home Of <span id="toswitch"
                                                                          class="colored">Creativity</span></h1>

            <!-- Home Categories -->
            <ul class="home-categories">
                <li class="h-item uppercase ">cinematography</li>
                <li class="h-item uppercase ">photography</li>
            </ul>
            <!-- Bottom Arrow -->
            <a href="#film" class="home-arrow scroll uppercase bold">
                <img src="images/bottom-arrow.png" alt="bottom"/>
                <!--<span>what we do ?</span>-->
            </a>
        </div><!-- End Home Texts -->
    </div><!-- End Home Details -->
</section><!-- End Home Section -->


<section id="film" class="container waypoint">
    <!-- Team Inner -->
    <div class="inner team">
        <!--  DeHeader -->
        <h1 class="header semibold dark">Aktuelle Filmprojekte</h1>

        <!--scription -->
        <h4 class="dark">Hintergrundinformationen. Videos. Fotos. Texte.<span class="dark bold"></span></h4>
        <!-- Members -->
        <div class="team-members inner-details">
            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image" href="ruby.php">
                        <!-- Img -->
                        <img src="images/covers/ruby.jpg" class="blackandwhite tocolor" alt=""/>
                    </a>
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image" href="symbiose.php">
                        <!-- Img -->
                        <img src="images/covers/symbiose.jpg" class="blackandwhite tocolor" alt=""/>
                    </a>
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->


            <!-- Member -->
            <div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="200">
                <div class="member-inner">
                    <!-- Team Member Image -->
                    <a class="team-image" href="maerchenminuten.php">
                        <!-- Img -->
                        <img src="images/covers/maerchen.jpg" class="blackandwhite tocolor" alt=""/>
                    </a>
                </div> <!-- End Member Inner -->
            </div><!-- End Member -->
            <div class="clear"></div>
        </div><!-- End Members -->
    </div><!-- End Team Inner -->
</section><!-- End Team Section -->
<!---->
<!--<!-- Services -->-->
<!--<section id="services" class="container parallax1">-->
<!---->
<!--    <div class="inner">-->
<!---->
<!--        <!-- Header -->-->
<!--        <h1 class="header header semibold white">Aktuelle Fotoprojekte</h1>-->
<!---->
<!--        <!-- Description -->-->
<!--        <h4 class="h-desc white">On the other hand, we denounce with righteous indignation and dislike men who are so-->
<!--            beguiled and by the <span class="white bold">charms</span> of pleasure of the moment, so blinded by desire,-->
<!--            that they cannot foresee the pain </h4>-->
<!---->
<!--        <!-- Boxes -->-->
<!--        <div class="service-boxes">-->
<!---->
<!--            <!-- Box 1 -->-->
<!--            <div class="col-xs-2 service-box animated" data-animation="fadeIn" data-animation-delay="200"-->
<!--                 data-toggle="tooltip" data-placement="top"-->
<!--                 title="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which ">-->
<!--                <!-- Icon -->-->
<!--                <a class="service-icon">-->
<!--                    <i class="fa fa-flash"></i>-->
<!--                </a>-->
<!--                <!-- Header -->-->
<!--                <p class="service-header light white">Analystic</p>-->
<!--            </div>-->
<!---->
<!---->
<!--            <!-- Box 2 -->-->
<!--            <div class="col-xs-2 service-box animated" data-animation="fadeIn" data-animation-delay="200"-->
<!--                 data-toggle="tooltip" data-placement="top"-->
<!--                 title="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. ">-->
<!--                <!-- Icon -->-->
<!--                <a class="service-icon">-->
<!--                    <i class="fa fa-bullseye"></i>-->
<!--                </a>-->
<!--                <!-- Header -->-->
<!--                <p class="service-header light white">Graphic Design</p>-->
<!--            </div>-->
<!---->
<!---->
<!--            <!-- Box 3 -->-->
<!--            <div class="col-xs-2 service-box animated" data-animation="fadeIn" data-animation-delay="200"-->
<!--                 data-toggle="tooltip" data-placement="top"-->
<!--                 title="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. ">-->
<!--                <!-- Icon -->-->
<!--                <a class="service-icon">-->
<!--                    <i class="fa fa-camera"></i>-->
<!--                </a>-->
<!--                <!-- Header -->-->
<!--                <p class="service-header light white">Photography</p>-->
<!--            </div>-->
<!---->
<!---->
<!--            <!-- Box 4 -->-->
<!--            <div class="col-xs-2 service-box animated" data-animation="fadeIn" data-animation-delay="200"-->
<!--                 data-toggle="tooltip" data-placement="top"-->
<!--                 title="There are many variations of passages of Lorem Ipsum available.">-->
<!--                <!-- Icon -->-->
<!--                <a class="service-icon">-->
<!--                    <i class="fa fa-twitter"></i>-->
<!--                </a>-->
<!--                <!-- Header -->-->
<!--                <p class="service-header light white">Social</p>-->
<!--            </div>-->
<!---->
<!---->
<!--            <!-- Box 5 -->-->
<!--            <div class="col-xs-2 service-box animated" data-animation="fadeIn" data-animation-delay="200"-->
<!--                 data-toggle="tooltip" data-placement="top"-->
<!--                 title="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. ">-->
<!--                <!-- Icon -->-->
<!--                <a class="service-icon">-->
<!--                    <i class="fa fa-globe"></i>-->
<!--                </a>-->
<!--                <!-- Header -->-->
<!--                <p class="service-header light white">Seo</p>-->
<!--            </div>-->
<!---->
<!---->
<!--            <!-- Box 6 -->-->
<!--            <div class="col-xs-2 service-box animated" data-animation="fadeIn" data-animation-delay="200"-->
<!--                 data-toggle="tooltip" data-placement="top"-->
<!--                 title="There are many variations of passages of Lorem Ipsum available. ">-->
<!--                <!-- Icon -->-->
<!--                <a class="service-icon">-->
<!--                    <i class="fa fa-desktop"></i>-->
<!--                </a>-->
<!--                <!-- Header -->-->
<!--                <p class="service-header light white">Web Design</p>-->
<!--            </div>-->
<!---->
<!--            <div class="clear"></div>-->
<!---->
<!--        </div> <!-- End Boxes -->-->
<!---->
<!--    </div><!-- End Service Inner -->-->


<!-- Contact Section -->
<section id="contact" class="container parallax5">
    <!-- Contact Inner -->
    <div class="inner contact">

        <!-- Header -->
        <h1 class="header semibold white">Kontakt</h1>

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
            <p><span class="bold colored">München</span></p>
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