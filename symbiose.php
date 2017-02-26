<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>ZugDirekt | Ruby Kurzfilm</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php include 'imports.php' ?>
</head>

<body>

<!-- Page Loader -->
<section id="pageloader">
    <div class="loader-item fa fa-spin colored-border"></div>
</section>

<?php include 'navbar.php'; ?>

<?php
$api_key = 'AIzaSyAwIo8s86R20v2av6pl-Qh1uwCmcPrTZcI';
$video_id = 'qajMaQ1wj7U';

$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $video_id . "&key=" . $api_key);
$json_data = json_decode($JSON, true);
$view_count = floor($json_data['items'][0]['statistics']['viewCount'] / 1000);

?>


<!-- Page Header -->
<section class="page_header container waypoint">
    <div class="page_header_inner">
        <!-- Header -->
        <h1 class="fixed-text hometext condensed uppercase white bold t-center">
            Symbiose.Mensch
        </h1>
        <!-- Description -->
        <p class="light t-center">
            Ein minimalistischer Dokumentarfilm.
        </p>
    </div>
</section><!-- End Page Header -->


<section id="shortcodes" class="container">
    <div class="inner_s">
        <!-- Facts, Skills -->
        <div class="cont">
            <div class="col-xs-12 facts">
                <!-- Factor -->
                <div class="col-xs-3 fact mrg">
                    <!-- Fact Left -->
                    <a class="fact-icon">
                        <!-- Fact Icon -->
                        <i class="fa fa-users"></i>
                    </a>
                    <!-- Factor Area -->
                    <div class="fact-number" data-perc="21">
                        <!-- Factor -->
                        <h1 class="factor"></h1>
                        <!-- Factor Description -->
                        <h3 class="light uppercase">Beteiligte<br/> Personen</h3>
                    </div><!-- End Factor Area -->
                </div><!-- End Factor -->


                <!-- Factor -->
                <div class="col-xs-3 fact mrg">
                    <!-- Fact Left -->
                    <a class="fact-icon">
                        <!-- Fact Icon -->
                        <i class="fa fa-calendar-o"></i>
                    </a>
                    <!-- Factor Area -->
                    <div class="fact-number" data-perc="10">
                        <!-- Factor -->
                        <h1 class="factor light"></h1>
                        <!-- Factor Description -->
                        <h3 class="light uppercase">Monate<br/> Produktions-<br/>zeitraum</h3>
                    </div><!-- End Factor Area -->
                </div><!-- End Factor -->

                <div class="col-xs-3 fact mrg">
                    <!-- Fact Left -->
                    <a class="fact-icon">
                        <!-- Fact Icon -->
                        <i class="fa fa-clock-o"></i>
                    </a>
                    <!-- Factor Area -->
                    <div class="fact-number" data-perc="215">
                        <!-- Factor -->
                        <h1 class="factor light"></h1>
                        <!-- Factor Description -->
                        <h3 class="light uppercase">Minuten Rohmaterial</h3>
                    </div><!-- End Factor Area -->
                </div><!-- End Factor -->


                <!-- Factor -->
                <div class="col-xs-3 fact mrg">
                    <!-- Fact Left -->
                    <a class="fact-icon">
                        <!-- Fact Icon -->
                        <i class="fa fa-play"></i>
                    </a>
                    <!-- Factor Area -->
                    <div class="fact-number" data-perc="<?php echo $view_count; ?>">
                        <!-- Factor -->
                        <h1 class="factor light"></h1>
                        <h1 class="suffix light">k</h1>
                        <!-- Factor Description -->
                        <h3 class="light uppercase">YouTube-Aufrufe</h3>
                    </div><!-- End Factor Area -->
                </div><!-- End Factor -->

            </div>
        </div>

    </div><!-- End inner -->

    <!-- Pricing Tables -->
    <div class="inner_s gray2">


        <!-- Two Column -->
        <div class="columns t-left">
            <div class="col-xs-6 mrg">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qajMaQ1wj7U" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-xs-6 mrg">
                <h4 class="semibold dark condensed uppercase t-left">Interessante Überschrift</h4>
                <p>Hier folgt ein informativer Beschreibungstext zum Projekt.
                </p>
            </div>
            <div class="clear"></div>
        </div>

    </div>


</section><!-- End Short Codes -->


<?php include 'footer.php'; ?>

</body>

</html>