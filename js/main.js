$(document).ready(function () {

    flickerLight();
    //switchText();
    switchIcons();

    $('.tocolor').on('mouseover', function () {
        $(this).css({'-webkit-filter': 'grayscale(0%)'});
    }).on('mouseleave', function () {
        $(this).css({'-webkit-filter': 'grayscale(100%)'});
    });

    $('.btn-tab').on('click', function () {
        $('.btn-tab').removeClass('btn-tab-active');
        $(this).addClass('btn-tab-active');
    });

});

function flickerLight() {

    $('#logo').css({opacity: '0.1'})
        .delay(30 + Math.floor(Math.random() * 60))
        .fadeTo(70, 1);

    window.setTimeout(function () {
        flickerLight()
    }, Math.pow(5 + Math.floor(Math.random() * 120), 2))

}

function switchIcons() {

    var random = Math.random();
    if (random <= 0.994) {

        //Nik
        var nik = $('.nik').find('i');
        random = Math.random();

        if (random <= 0.33) {
            nik.addClass('fa-fire-extinguisher');
            $('.nik').addClass('lilli');
        } else if (random <= 0.66) {
            nik.addClass('fa-bolt');
            $('.nik').addClass('imdb');
        } else {
            nik.addClass('fa-battery-full');
        }

        //Ferdi
        var ferdi = $('.ferdi').find('i');
        random = Math.random();
        if (random <= 0.05) {
            ferdi.addClass('fa-asterisk');
        } else {
            ferdi.addClass('fa-music');
        }

        //Josef
        var josef = $('.josef').find('i');
        random = Math.random();
        if (random <= 0.9) {
            josef.addClass('fa-cutlery');
        } else if (random <= 0.95) {
            josef.addClass('fa-grav');
        } else {
            josef.addClass('fa-snowflake-o');
        }


        //Alois
        var alois = $('.alois').find('i');
        random = Math.random();
        if (random <= 0.05) {
            alois.addClass('fa-tachometer');
        } else {
            alois.addClass('fa-camera-retro');
        }


        //Anna
        var anna = $('.anna').find('i');
        random = Math.random();
        if (random <= 0.05) {
            anna.addClass('fa-sign-language');
        } else {
            anna.addClass('fa-align-left');
        }

        //Dominik
        var dominik = $('.dominik').find('i');
        random = Math.random();
        if (random <= 0.05) {
            dominik.addClass('fa-wpexplorer');
        } else if (random <= 0.1) {
            dominik.addClass('fa-internet-explorer');
            $('.dominik').addClass('ie');
        } else {
            dominik.addClass('fa-desktop');
        }

        //Anna
        var lilli = $('.lilli').find('i');
        random = Math.random();
        if (random <= 0.07) {
            lilli.addClass('fa-imdb');
            $('.lilli').addClass('imdb');
        } else {
            lilli.addClass('fa-heart');
        }

        $('.mili i').addClass('fa-paint-brush');

    } else {
        $('.boxes').find('i').addClass('fa-bug');
    }

}


var counter = 0;

function switchText() {

    var words = ['cinematography', 'photography', 'web design', 'creativity', 'productivity', 'other stuff'];
    $('#toswitch').text(words[counter]);

    if (counter == words.length - 1) {
        counter = 0;
    } else {
        counter++;
    }


    window.setTimeout(function () {
        switchText()
    }, 3500)


}