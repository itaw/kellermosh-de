$(document).ready(function () {

    /*
     * nav
     */
    var currentPage = $('#current-page').html();
    $('#nl-' + currentPage).addClass('km-active');

    /*
     * header images
     */
    var getHeaderImages = function () {
        var array = [];
        $.each($('#data-header-assets').children(), function (i, asset) {
            array.push($(asset).html());
        });

        return array;
    };

    var headerImages = getHeaderImages();

    $('.km-header-container').css('background-image', 'url("' + headerImages[0] + '")');
    var i = 1;

    setInterval(function () {

        $('.km-header-container').css('background-image', 'url("' + headerImages[i] + '")');

        i++;

        i = i % headerImages.length;

    }, 5000);

});