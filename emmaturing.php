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

<!-- Page Loader -->
<section id="pageloader">
    <div class="loader-item fa fa-spin colored-border"></div>
</section>

<?php include 'navbar.php'; ?>

<?php
$api_key = 'AIzaSyAwIo8s86R20v2av6pl-Qh1uwCmcPrTZcI';
$video_id = 'RW9PzklXgfE';

$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $video_id . "&key=" . $api_key);
$json_data = json_decode($JSON, true);
$view_count = floor($json_data['items'][0]['statistics']['viewCount'] / 1000);

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
                    <div class="fact-number" data-perc="12">
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
                    <div class="fact-number" data-perc="6">
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
                    <div class="fact-number" data-perc="94">
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
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/null" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-xs-6 mrg">
                <h4 class="semibold dark condensed uppercase t-left">Beschreibung</h4>
                <p>
                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                    approaches to corporate strategy foster collaborative thinking to further the overall value
                    proposition. Organically grow the holistic world view of disruptive innovation via workplace
                    diversity and empowerment.
                </p>
                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day,
                    going forward, a new normal that has evolved from generation X is on the runway heading towards a
                    streamlined cloud solution. User generated content in real-time will have multiple touchpoints for
                    offshoring.

                    Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override
                    the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the
                    information highway will close the loop on focusing solely on the bottom line.</p>
            </div>
            <div class="clear"></div>
        </div>

    </div>


</section><!-- End Short Codes -->


<?php include 'footer.php'; ?>

</body>

</html>