<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>ZugDirekt | SYMBIOSE.mensch Dokumentarfilm</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php include 'imports.php' ?>
</head>

<body>

<?php include 'navbar.php'; ?>

<?php
$api_key = 'AIzaSyAwIo8s86R20v2av6pl-Qh1uwCmcPrTZcI';
$video_id = 'qajMaQ1wj7U';

$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $video_id . "&key=" . $api_key);
$json_data = json_decode($JSON, true);

$views = $json_data['items'][0]['statistics']['viewCount'];
if ($views > 4121) {
    $k_option = true;
    $views = floor($views / 1000);
} else {
    $k_option = false;
}

$to_time = strtotime("now");
$from_time = strtotime("2016-07-21 18:00:00");
$minutes = round(abs($to_time - $from_time) / 60, 2);
$ha = $minutes * 24.7;
$kha = round($ha / 1000);

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
                        <i class="fa fa-microphone" style="color: lightblue"></i>
                    </a>
                    <!-- Factor Area -->
                    <div class="fact-number" data-perc="7">
                        <!-- Factor -->
                        <h1 class="factor"></h1>
                        <!-- Factor Description -->
                        <h3 class="light uppercase">Interviews</h3>
                    </div><!-- End Factor Area -->
                </div>


                <!-- Factor -->
                <div class="col-xs-3 fact mrg">
                    <!-- Fact Left -->
                    <a class="fact-icon">
                        <!-- Fact Icon -->
                        <i class="fa fa-video-camera" style="color: lightgray"></i>
                    </a>
                    <!-- Factor Area -->
                    <div class="fact-number" data-perc="142">
                        <!-- Factor -->
                        <h1 class="factor light"></h1>
                        <!-- Factor Description -->
                        <h3 class="light uppercase">Minuten<br/> Konzentration vor der Kamera</h3>
                    </div><!-- End Factor Area -->
                </div><!-- End Factor -->

                <div class="col-xs-3 fact mrg">
                    <!-- Fact Left -->
                    <a class="fact-icon">
                        <!-- Fact Icon -->
                        <i class="fa fa-pagelines" style="color: lightgreen"></i>
                    </a>
                    <!-- Factor Area -->
                    <div class="fact-number" data-perc="<?php echo $kha ?>">
                        <!-- Factor -->
                        <h1 class="factor light"></h1>
                        <h1 class="suffix light"></h1>
                        <!-- Factor Description -->
                        <h3 class="light uppercase">* 1000 Hektar Regenwaldverlust seit Videoupload</h3>
                    </div><!-- End Factor Area -->
                </div><!-- End Factor -->


                <!-- Factor -->
                <div class="col-xs-3 fact mrg">
                    <!-- Fact Left -->
                    <a class="fact-icon" href="<?php echo 'http://youtube.com/watch?v=' . $video_id ?>" target="_blank">
                        <!-- Fact Icon -->
                        <i class="fa fa-play" style="color: lightcoral"></i>
                    </a>
                    <!-- Factor Area -->
                    <div class="fact-number" data-perc="<?php echo $views; ?>">
                        <!-- Factor -->
                        <h1 class="factor light"></h1>
                        <h1 class="suffix light"><?php echo $k_option ? 'k' : '' ?></h1>
                        <!-- Factor Description -->
                        <h3 class="light uppercase">YouTube-Aufrufe</h3>
                    </div><!-- End Factor Area -->
                </div><!-- End Factor -->

            </div>
        </div>

    </div><!-- End inner -->
    <div class="clear"></div>
    <!-- Pricing Tables -->
    <div class="inner_s">

        <h4 class="semibold dark condensed uppercase text-center">Der Film</h4>
        <!-- Two Column -->
        <div class="columns t-left">
            <div class="col-xs-6 t-left">


                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qajMaQ1wj7U" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-xs-6 t-left">
                <p>Der Mensch. Die Natur.<br/>
                    Die Natur als Lebensraum für den Menschen.<br/>
                    Der Mensch als Teil der Natur.</p><br/>
                <p>SYMBIOSE.mensch gewinnt den Wettbewerb ECOZOOM vom bmub in der Kategorie Schüler*innen und war
                    eingeladen zur Preisverleihung im Gasometer Schöneberg im Rahmen des Zukunftsfestivals 2016.</p>
                <p>
                    Ebenfalls mit dem 1. Preis ausgezeichnet wurde er beim Wettbewerb DEin blick in die Natur 2016 in
                    der Kategorie 16-18 Jahre.
                </p>

            </div>
            <div class="clear"></div>
        </div>

    </div>


</section><!-- End Short Codes -->


<?php include 'footer.php'; ?>

</body>

</html>