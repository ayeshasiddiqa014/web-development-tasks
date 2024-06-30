$(document).ready(function () {
    var myCarousel = $('#carouselExampleControls');

    $('#playButton').click(function () {
        myCarousel.carousel('cycle'); 
    });

    $('#pauseButton').click(function () {
        myCarousel.carousel('pause'); 
    });
});
