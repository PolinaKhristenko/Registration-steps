$(document).ready(function() {

    $('.auth__forgot').on('click', function() {
        $('.auth__login').fadeOut('fast', function() {
            $('.auth__recovery-1').fadeIn('fast');
        })
    });

    $('.auth__recovery-1-btn').on('click', function() {
        $('.auth__recovery-1').fadeOut('fast', function() {
            $('.auth__recovery-2').fadeIn('fast');
            codeTimer ();
        })
        return false;
    });

    $('.auth__down-reg').on('click', function() {
        $('.auth__login').fadeOut('fast', function() {
            $('.auth__reg-1').fadeIn('fast');
        })
    });

    $('.auth__down-login').on('click', function() {
        $('.auth__reg-1').fadeOut('fast', function() {
            $('.auth__login').fadeIn('fast');
        })
    });

    $('.auth__reg-1-btn').on('click', function() {
        $('.auth__reg-1').fadeOut('fast', function() {
            $('.auth__reg-2').fadeIn('fast');
            $('.auth__number').html($('#auth__phone-reg').val());
            codeTimer ();
        })
        return false;
    });

    $('.auth__number-change').on('click', function () {
        $('.auth__reg-2').fadeOut('fast', function() {
            $('.auth__reg-1').fadeIn('fast');
            clearInterval(myTimer);
        })
    })



    var timing;
    var myTimer;

    function codeTimer() {
        timing = 60;
        $('.timer__function').html(timing);
        myTimer = setInterval(function() {
        --timing;
        $('.timer__function').html(timing);
        if (timing === 0) {
            clearInterval(myTimer);
            $('.code__timer').html('Отправить код повторно');
        }
        }, 1000);
    }


});