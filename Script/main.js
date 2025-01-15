// smooth scroll
$(document).ready(function(){
    $(".navbar .nav-link").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function(){
                window.location.hash = hash;
            });
        } 
    });
});

function initMap() {
    // Nouvelles coordonnées pour le marqueur
    var newCoordinates = {lat: 47.364623, lng: -2.116880};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: newCoordinates
    });

    var marker = new google.maps.Marker({
      position: newCoordinates,
      map: map
    });
}

(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });
})(jQuery);