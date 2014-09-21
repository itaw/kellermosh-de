$(document).ready(function () {

    $('.km-header-container').css('background-image', 'url("../web/assets/pages/kellermosh/img/km0.jpg")');
    var i = 1;

    setInterval(function() {

        $('.km-header-container').css('background-image', 'url("../web/assets/pages/kellermosh/img/km' + i + '.jpg")');

        i++;

        i = i % 3;

    }, 5000);

});