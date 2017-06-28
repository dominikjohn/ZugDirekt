<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>ZugDirekt | Emma Turing Kurzfilm</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php include 'imports.php' ?>
</head>

<body>

<?php include 'navbar.php'; ?>

<?php

$api_key = 'AIzaSyAwIo8s86R20v2av6pl-Qh1uwCmcPrTZcI';
$video_id = 'bsETP3e6hys';

$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $video_id . "&key=" . $api_key);
$json_data = json_decode($JSON, true);

$views = $json_data['items'][0]['statistics']['viewCount'];
if ($views > 4121) {
    $k_option = true;
    $views = floor($views / 1000);
} else {
    $k_option = false;
}

?>

<!-- Page Header -->
<section class="page_header container waypoint">
    <div class="page_header_inner">
        <!-- Header -->
        <h1 class="fixed-text hometext condensed uppercase white bold t-center">
            Emma Turing
        </h1>
        <!-- Description -->
        <p class="light t-center">
            Ein Kurzfilm.
        </p>
    </div>
</section><!-- End Page Header -->


<section id="shortcodes" class="container">
    <!-- Pricing Tables -->
    <div class="inner_s gray2">
        <div class="col-xs-12 facts">

            <div class="col-xs-3 fact mrg">

                <a class="fact-icon">
                    <i class="fa fa-users" style="color: lightgrey"></i>
                </a>

                <div class="fact-number" data-perc="10">

                    <h1 class="factor"></h1>

                    <h3 class="light uppercase">Beteiligte<br/> Personen</h3>
                </div>
            </div>


            <div class="col-xs-3 fact mrg">
                <a class="fact-icon">
                    <i class="fa fa-music" style="color: rgb(234, 104, 118)"></i>
                </a>

                <div class="fact-number" data-perc="6">

                    <h1 class="factor light"></h1>

                    <h3 class="light uppercase">komponierte & produzierte Musikstücke</h3>
                </div>
            </div>

            <div class="col-xs-3 fact mrg">

                <a class="fact-icon">

                    <i class="fa fa-calendar-o" style="color: lightblue"></i>
                </a>

                <div class="fact-number" data-perc="10">

                    <h1 class="factor light"></h1>

                    <h3 class="light uppercase">Drehtage</h3>
                </div>
            </div>

            <div class="col-xs-3 fact mrg">

                <a class="fact-icon" href="<?php echo 'http://youtube.com/watch?v=' . $video_id ?>" target="_blank">

                    <i class="fa fa-play" style="color: lightcoral"></i>
                </a>

                <div class="fact-number" data-perc="<?php echo $views; ?>">

                    <h1 class="factor light"></h1>
                    <h1 class="suffix light"><?php echo $k_option ? 'k' : '' ?></h1>

                    <h3 class="light uppercase">YouTube-Aufrufe</h3>
                </div>
            </div>

        </div>
        <!-- Two Column -->
        <div class="columns t-left">

            <div class="col-xs-6 t-left">
                <h2 class="l-header semibold dark condensed uppercase t-left">Der Film</h2>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bsETP3e6hys" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-xs-6 mrg">
                <h4 class="semibold dark condensed uppercase t-left">Beschreibung</h4>
                <br>
                <p>Emma ist fest davon überzeugt, dass sie von ihren echten Eltern mit 3 Jahren auf der Erde abgesetzt
                    worden ist.</p>
            </div>

            <br>
            <div class="col-xs-12 mrg">
                <h4 class="l-header semibold dark condensed uppercase t-left">Cover</h4>
                <img src="images/stills/et/ETcover02-min.png" width="100%">
            </div>
            <div class="col-xs-12 mrg">
                <h4 class="l-header semibold dark condensed uppercase t-left">Film Stills</h4>
                <img src="images/stills/et/ETstill_01-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_02-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_03-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_04-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_05-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_06-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_07-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_08-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_09-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_10-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETstill_11-min.png" width="100%">
            </div>
            <div class="clear"></div>

        </div>

    </div>

</section>

<?php include 'footer.php'; ?>

</body>
</html>
