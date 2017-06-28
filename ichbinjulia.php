<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>ZugDirekt | Ich bin Julia Kurzfilm</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php include 'imports.php' ?>
</head>

<body>

<?php include 'navbar.php'; ?>

<?php

include_once('php/WolframAlphaEngine.php');

$engine = new WolframAlphaEngine(WolframAlphaEngine::APPID);
$results = $engine->getResults('current distance from earth to mars in km');
$pods = $results->getPods();

$pod = $pods[1];
$subpod = $pod->getSubpods()[0];
$string = $subpod->plaintext;

$len = strlen($string);
$distance = round(intval(str_replace('.', '', substr($string, 0, 5))) / 10);

if ($len != 28) {
    $distance .= '0';
}


$api_key = 'AIzaSyAwIo8s86R20v2av6pl-Qh1uwCmcPrTZcI';
$video_id = 'G_PMAh0XHjg';

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
            Ich bin Julia
        </h1>
        <!-- Description -->
        <p class="light t-center">
            Ein Kurzfilm.
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

                    <div class="fact-number" data-perc="4">

                        <h1 class="factor nodisplay">4</h1>

                        <h3 class="light uppercase">Beteiligte<br/> Personen</h3>
                    </div>
                </div>


                <div class="col-xs-3 fact mrg">
                    <a class="fact-icon">
                        <i class="fa fa-rocket" style="color: lightgoldenrodyellow"></i>
                    </a>

                    <div class="fact-number" data-perc="">

                        <h1 class="factor light nodisplay"><?php echo $distance ?></h1>

                        <h3 class="light uppercase">Mio. km aktuelle Distanz zum Mars</h3>
                    </div>
                </div>

                <div class="col-xs-3 fact mrg">

                    <a class="fact-icon">

                        <i class="fa fa-calendar-o" style="color: lightblue"></i>
                    </a>

                    <div class="fact-number" data-perc="1">

                        <h1 class="factor light nodisplay">1</h1>

                        <h3 class="light uppercase">Drehtag</h3>
                    </div>
                </div>


                <div class="col-xs-3 fact mrg">

                    <a class="fact-icon" href="<?php echo 'http://youtube.com/watch?v=' . $video_id ?>" target="_blank">

                        <i class="fa fa-play" style="color: lightcoral"></i>
                    </a>

                    <div class="fact-number" data-perc="<?php echo $views; ?>">

                        <div class="factor nodisplay">
                            <h1 class="factor light nodisplay"><?php echo $views; ?></h1>
                            <h1 class="suffix light"><?php echo $k_option ? 'k' : '' ?></h1>
                        </div>
                        <h3 class="light uppercase">YouTube-Aufrufe</h3>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Pricing Tables -->
    <div class="inner_s">

        <!-- Two Column -->
        <div class="columns t-left">
            <div class="col-xs-6 mrg">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>"
                            frameborder="0"
                            allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-xs-6 t-left">
                <!-- Header -->
                <h2 class="l-header semibold dark condensed uppercase t-left">Festivals</h2>
                <!-- My Tabs -->
                <ul class="" id="myTab">
                    <a href="#home" data-toggle="tab">
                        <li class="btn btn-tab btn-tab-active"><b>38. Filmtage der Bayrischen Schulen</b></li>
                    </a>
                    <a href="#profile" data-toggle="tab">
                        <li class="btn btn-tab"><b>Film-Input & Film-Output</b></li>
                    </a>
                </ul>
                <!-- Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        „...und hiermit bewerbe ich mich..." Gibt es eine schwierigere, unklarere und vagere Situation,
                        als die, wenn sich junge Menschen für einen Job bewerben? Jeder hat das zu durchleben,
                        irgendwann ist es so weit, Farbe bekennen, sich darstellen, sich bewerben. „...und hiermit
                        bewerbe ich mich für die One-way-Mission zum Mars!" Ein junges Mädchen sagt diesen Satz klar und
                        ohne Zögern in die Kamera, nimmt ihr Bewerbungsvideo selbst auf. Junge Menschen haben gute
                        Chancen für diese Reise ohne Wiederkehr, vorausgesetzt, sie zeigen den unbeugsamen Willen dafür.
                        Alles an diesem Film ist präzise, genau abgestimmt, überzeugend positioniert, klar gesetzt. Der
                        Film funktioniert implizit, er findet nämlich Bilder, die uns unter die Haut gehen, die so
                        eindeutig in ihrer emotionalen Aussage sind, dass keine Zweifel bleiben: Eine Hand taucht ins
                        Wasser eines Brunnens, im Zeitraffer läuft Leben an Julia vorbei. Das könnte Kitsch werden, ist
                        aber mit dieser selbstbewusst-frischen Darstellerin und dieser ruhigen und bildsicheren Kamera
                        immer auf der authentischen Seite.
                        So auch das Schlussbild, wenn Julia in Hyperzeitlupe abhebt wie eine Saturn-V, dann glauben wir
                        ihr den Aufbruch zum Mars. Der Film Ich bin Julia" von Amon Ritz und seiner crew am Albert-
                        Einstein-Gymnasium in München erhält den Förderpreis der Bavaria Film GmbH.
                    </div>

                    <div class="tab-pane" id="profile">
                        „Julia ist felsenfest davon überzeugt: Sie will Astronautin werden, ihr Leben in den Dienst der
                        Wissenschaft stellen und eines Tages das „ONE-Way-Ticket” zum Mars nehmen. Ihr Alltag wirkt
                        schon jetzt wie der einer Astronautin – durchgetaktet, routiniert und überaus diszipliniert. Der
                        Film stellt ihren Wunsch visuell beeindruckend, technisch professionell dar – aber nicht nur der
                        Oberfläche, des Looks willen, sondern inhaltlich motiviert. Julia ist kein „Püppchen” mit einem
                        zu großem Traum, sondern ein starkes und durch und durch entschlossenes Mädchen, über das man
                        gerne noch mehr erfahren würde. Wenn Julia am Ende des Filmes ausspricht, „das kann ich am
                        besten im All” wird ihre ganze Entschlossenheit deutlich. Die Schwerelosigkeit kommt zwar etwas
                        überraschend, hebt dan Film aber noch einmal auf ein anderes Level.”
                    </div>
                </div>
            </div><!-- End Tabs -->
            <div class="clear"></div>
        </div>

    </div>


</section><!-- End Short Codes -->


<?php include 'footer.php'; ?>

</body>

</html>