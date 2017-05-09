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
$video_id = 'null';

/*$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $video_id . "&key=" . $api_key);
$json_data = json_decode($JSON, true);
$view_count = floor($json_data['items'][0]['statistics']['viewCount'] / 1000);
*/
$begin = strtotime("01.10.2016");
$release = strtotime("01.06.2017");
$now = time();

$datediff = $release - $now;
$datediff2 = $release - $begin;

$percentage = 1 - $datediff / $datediff2;

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
            Upcoming Project.
        </p>
    </div>
</section><!-- End Page Header -->


<section id="shortcodes" class="container">
    <!-- Pricing Tables -->
    <div class="inner_s gray2">

        <!-- Two Column -->
        <div class="columns t-left">

            <div class="col-xs-5 mrg">
                <h4 class="semibold dark condensed uppercase t-left">Beschreibung</h4>
                <p>Emma ist fest davon überzeugt, dass sie von ihren echten Eltern mit 3 Jahren auf der Erde abgesetzt
                    worden ist.</p>
            </div>
            <div class="facts cont inner_s">
                <div class="col-xs-3 fact mrg">

                    <a class="fact-icon">

                        <i class="fa fa-medkit" style="color: white"></i>
                    </a>

                    <div class="fact-number" data-perc="4">

                        <h1 class="factor"></h1>

                        <h3 class="light uppercase">Drehtage wegen Krankheit<br> verschoben</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="semibold dark condensed uppercase t-left" style="display: inline">Fortschritt </h4>
                <p style="display: inline;">(<?php echo round($percentage * 100) ?> %)</p>
                <div class="progress active mrg" style="border-radius: 4px;">
                    <div class="progress-bar progress-bar-info" role="progressbar"
                         aria-valuenow="<?php echo $percentage * 100 ?>"
                         aria-valuemin="0"
                         aria-valuemax="100"
                         style="background-color: #2A2A2A; width: <?php echo $percentage * 100 ?>%; border-radius: 4px;"></div>
                </div>
                <p class="t-left"></p>
            </div>

            <div class="col-xs-12 mrg">
                <h4 class="l-header semibold dark condensed uppercase t-left">Covers</h4>
                <img src="images/stills/et/ETcover02-min.png" width="100%">
                <br><br><br>
                <img src="images/stills/et/ETcover01-min.png" width="100%">
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
