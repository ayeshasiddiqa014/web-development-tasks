var myCarousel = document.getElementById('animalCarousel');

document.getElementById('playButton').addEventListener('click', function() {
    $('#animalCarousel').carousel('cycle');
});

document.getElementById('pauseButton').addEventListener('click', function() {
    $('#animalCarousel').carousel('pause');
});
