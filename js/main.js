$(document).ready(function () {

    flickerLight();
    //switchText();
    
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