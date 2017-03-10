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
            Ruby
        </h1>
        <!-- Description -->
        <p class="light t-center">
            Ein Kurzfilm.
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
                        <i class="fa fa-users" style="color: lightgray"></i>
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
                        <h3 class="light uppercase">Minuten<br> Rohmaterial</h3>
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
    <div class="inner_s">
        <!-- Two Column -->
        <div class="columns t-left">
            <div class="col-xs-6 t-left">
                <h2 class="l-header semibold dark condensed uppercase t-left">Der Film</h2>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WBC2MukULcE" frameborder="0"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xs-6 t-left">
                <!-- Header -->
                <h2 class="l-header semibold dark condensed uppercase t-left">Festivals</h2>
                <!-- My Tabs -->
                <ul class="" id="myTab">
                    <a href="#home" data-toggle="tab">
                        <li class="btn btn-tab btn-tab-active"><b>39. Filmtage der Bayerischen Schulen</b></li>
                    </a>
                    <a href="#profile" data-toggle="tab">
                        <li class="btn btn-tab"><b>Flimmern und Rauschen 2017</b></li>
                    </a>
                </ul>
                <!-- Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        Sie ist echt anders drauf: steht auf Programmieren, Schrauben und Löten. Klar, dass außer dem
                        Klassen-Nerd keiner viel mit ihr zu tun haben will. Nur wenn mal das Smartphone zickt, kann man
                        sie gebrauchen. Doch Ruby sollte keiner unterschätzen. Sie schreibt ihren eigenen Code und hackt
                        sich nach und nach in die Smartphones der „supercoolen“ Mitschüler ein. Jede noch so intime
                        Message liest sie mit und beginnt schon nach kurzer Zeit, Gott zu spielen. Delikate Clips werden
                        gepostet, Beziehungen gehen in die Brüche, keiner traut mehr dem anderen, alles gerät ins
                        Rutschen. Nur Ruby hängt mitten drin fest auf der Rutsche ihres Lebens.<br/>

                        In unglaublich eindringlichen Bildern erzählen die Filmemacher die vielschichtige Story des
                        hochbegabten Mädchens, das sich am Ende in seiner Zerstörungslust findet. Herausragendes
                        Schauspiel, technische Perfektion und eine professionelle filmische Haltung lassen nur eine
                        Diagnose zu: schwer preisverdächtig.<br/>

                        Die Filmgruppe erhält den Förderpreis des Staatsminister für Bildung und Kultus, Wissenschaft
                        und Kunst, Dr. Ludwig Spaenle und den undotierten Zuschauerpreis.
                    </div>

                    <div class="tab-pane" id="profile">
                        RUBY Gewinnt bei dem Festival "Flimmern & Rauschen 2017" den Münchner Jugendfilmpreis in der
                        Kategorie der 17 bis 21 Jährigen.<br/><br/>

                        Der Außenseiterin Ruby sind „Computer lieber als Menschen“. Sie mag ihr Dasein als Nerd und dass
                        sie von allen in Ruhe gelassen wird. Als sie die Gelegenheit bekommt, sich in die Handys ihrer
                        Mitschüler einzuhacken, nutzt sie das gnadenlos aus und bringt Beziehungen und Freundschaften
                        total durcheinander. Der unter Leitung von Amon Ritz von 17 Schülerinnen und Schülern des
                        Albert-Einstein-Gymnasiums in eigenverantwortlicher Arbeit entstandene Kurzspielfilm RUBY
                        zeichnet ein facettenreiches Bild eines Mädchens, das sich an ihr Außenseiterdasein gewöhnt hat
                        und nun plötzlich das Leben anderer bestimmen kann. Bewusst wird dabei nicht die Moralkeule
                        geschwungen. Dank der tollen und sehr eigenen Bildsprache, der guten Darsteller und nicht
                        zuletzt der passenden Musik ist RUBY ein überaus gelungener Film, der einen Preis mehr als
                        verdient hat.<br/><br/>

                        RUBY ist nominiert für das Bayrische Kinder & Jugend Filmfestival 2018 in Roth.
                    </div>
                </div>
            </div><!-- End Tabs -->
            <div class="col-xs-12 mrg">
                <h4 class="l-header semibold dark condensed uppercase t-left">Film Stills</h4>

                <img src="images/stills/ruby01.jpg" width="100%">
                <br><br><br>
                <img src="images/stills/ruby02.jpg" width="100%">
                <br><br><br>
                <img src="images/stills/ruby03.jpg" width="100%">
            </div>
            <div class="clear"></div>
        </div>

        <div class="clear"></div>

    </div>


</section><!-- End Short Codes -->


<?php include 'footer.php'; ?>

</body>

</html>