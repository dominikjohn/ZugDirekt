<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>ZugDirekt | SMAEK</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php include 'imports.php' ?>
</head>

<body>

<?php include 'navbar.php'; ?>

<?php
$api_key = 'AIzaSyAwIo8s86R20v2av6pl-Qh1uwCmcPrTZcI';
$video_id = 'WBC2MukULcE';

$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $video_id . "&key=" . $api_key);
$json_data = json_decode($JSON, true);
$view_count = floor($json_data['items'][0]['statistics']['viewCount'] / 1000);

?>


<!-- Page Header -->
<section class="page_header container waypoint">
    <div class="page_header_inner">
        <!-- Header -->
        <h1 class="fixed-text hometext condensed uppercase white bold t-center">
            SMAEK
        </h1>
        <!-- Description -->
        <p class="light t-center">
            Ein Fotoprojekt.
        </p>
    </div>
</section><!-- End Page Header -->


<section id="shortcodes" class="container">
    <div class="inner_s">

        <div class="cont">
            <div class="col-xs-12">
                <div class="col-xs-4 mrg no-margin no-padding">

                    <div class="col-xs-12 mrg">
                        <!-- Fact Left -->
                        <div class="work">
                            <div class="work-inner">
                                <!-- Image -->
                                <div class="work-image">
                                    <a href="images/photos/smaek/smaek7.jpg" data-rel="prettyPhoto[gallery]"
                                       class="work-link">
                                        <img src="images/photos/smaek/smaek7.jpg" alt=""/>
                                        <span class="positive"></span>
                                    </a>
                                </div>
                            </div><!-- End Work Inner -->
                        </div><!-- End Work -->
                    </div><!-- End Factor -->
                    <div class="col-xs-12 mrg">
                        <!-- Fact Left -->
                        <div class="work">
                            <div class="work-inner">
                                <!-- Image -->
                                <div class="work-image">
                                    <a href="images/photos/smaek/smaek1.jpg" data-rel="prettyPhoto[gallery]"
                                       class="work-link">
                                        <img src="images/photos/smaek/smaek1.jpg" alt=""/>
                                        <span class="positive"></span>
                                    </a>
                                </div>
                            </div><!-- End Work Inner -->
                        </div><!-- End Work -->
                    </div><!-- End Factor -->
                </div>

                <div class="col-xs-4 mrg no-margin no-padding">


                    <div class="col-xs-12 mrg">
                        <!-- Fact Left -->
                        <div class="work">
                            <div class="work-inner">
                                <!-- Image -->
                                <div class="work-image">
                                    <a href="images/photos/smaek/smaek3.jpg" data-rel="prettyPhoto[gallery]"
                                       class="work-link">
                                        <img src="images/photos/smaek/smaek3.jpg" alt=""/>
                                        <span class="positive"></span>
                                    </a>
                                </div>
                            </div><!-- End Work Inner -->
                        </div><!-- End Work -->
                    </div><!-- End Factor -->


                    <div class="col-xs-12 mrg">
                        <!-- Fact Left -->
                        <div class="work">
                            <div class="work-inner">
                                <!-- Image -->
                                <div class="work-image">
                                    <a href="images/photos/smaek/smaek4.jpg" data-rel="prettyPhoto[gallery]"
                                       class="work-link">
                                        <img src="images/photos/smaek/smaek4.jpg" alt=""/>
                                        <span class="positive"></span>
                                    </a>
                                </div>
                            </div><!-- End Work Inner -->
                        </div><!-- End Work -->
                    </div><!-- End Factor -->

                </div>


                <div class="col-xs-4 mrg no-margin no-padding">


                    <div class="col-xs-12 mrg">
                        <!-- Fact Left -->
                        <div class="work">
                            <div class="work-inner">
                                <!-- Image -->
                                <div class="work-image">
                                    <a href="images/photos/smaek/smaek5.jpg" data-rel="prettyPhoto[gallery]"
                                       class="work-link">
                                        <img src="images/photos/smaek/smaek5.jpg" alt=""/>
                                        <span class="positive"></span>
                                    </a>
                                </div>
                            </div><!-- End Work Inner -->
                        </div><!-- End Work -->
                    </div><!-- End Factor -->

                    <div class="col-xs-12 mrg">
                        <!-- Fact Left -->
                        <div class="work">
                            <div class="work-inner">
                                <!-- Image -->
                                <div class="work-image">
                                    <a href="images/photos/smaek/smaek2.jpg" data-rel="prettyPhoto[gallery]"
                                       class="work-link">
                                        <img src="images/photos/smaek/smaek2.jpg" alt=""/>
                                        <span class="positive"></span>
                                    </a>
                                </div>
                            </div><!-- End Work Inner -->
                        </div><!-- End Work -->
                    </div><!-- End Factor -->
                </div>

            </div>
        </div>

    </div><!-- End inner -->


    <div class="clear"></div>


</section><!-- End Short Codes -->
<br><br><br>

<?php include 'footer.php'; ?>

</body>

</html>