<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>ZugDirekt | Märchenminuten One Take</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php include 'imports.php' ?>
</head>

<body>

<?php include 'navbar.php'; ?>

<?php
$api_key = 'AIzaSyAwIo8s86R20v2av6pl-Qh1uwCmcPrTZcI';
$video_id = 'aQU9RHEX-S4';

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
            Märchenminuten
        </h1>
        <!-- Description -->
        <p class="light t-center">
            Ein One-Take-Musikvideo.
        </p>
    </div>
</section><!-- End Page Header -->


<section id="shortcodes" class="container">
    <div class="inner_s">
        <div class="cont">
            <div class="col-xs-12 facts">

                <div class="col-xs-3 fact mrg">

                    <a class="fact-icon">

                        <i class="fa fa-users" style="color: lightgray"></i>
                    </a>

                    <div class="fact-number" data-perc="15">

                        <h1 class="factor nodisplay">15</h1>

                        <h3 class="light uppercase">Beteiligte<br/> Personen</h3>
                    </div>
                </div>


                <div class="col-xs-3 fact mrg">
                    <a class="fact-icon">
                        <img src="images/crown.svg" width="50px" style="margin-top: 32px;"/>
                    </a>

                    <div class="fact-number" data-perc="1">

                        <h1 class="factor light nodisplay">1</h1>

                        <h3 class="light uppercase">König</h3>
                    </div>
                </div>

                <div class="col-xs-3 fact mrg">

                    <a class="fact-icon">

                        <i class="fa fa-repeat" style="color: lightblue"></i>
                    </a>

                    <div class="fact-number" data-perc="13">

                        <h1 class="factor light nodisplay">13</h1>

                        <h3 class="light uppercase">One-Take-Versuche</h3>
                    </div>
                </div>


                <div class="col-xs-3 fact mrg">

                    <a class="fact-icon" href="<?php echo 'http://youtube.com/watch?v=' . $video_id ?>" target="_blank">

                        <i class="fa fa-play" style="color: lightcoral"></i>
                    </a>

                    <div class="fact-number" data-perc="<?php echo $views; ?>">
                        <div class="factor nodisplay">
                            <h1 class="factor light"><?php echo $views; ?></h1>
                            <h1 class="suffix light"><?php echo $k_option ? 'k' : '' ?></h1>
                        </div>
                        <h3 class="light uppercase">YouTube-Aufrufe</h3>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Pricing Tables -->
    <div class="inner_s gray2">


        <!-- Two Column -->
        <div class="columns t-left">
            <div class="col-xs-6 mrg">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aQU9RHEX-S4" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-xs-6 mrg">
                <h4 class="semibold dark condensed uppercase t-left">Mehr Informationen folgen in Kürze.</h4>

            </div>
            <div class="clear"></div>
        </div>

    </div>


</section><!-- End Short Codes -->


<?php include 'footer.php'; ?>

</body>

</html>