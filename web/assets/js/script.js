

$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });
});

$("nav a").click(function() {

    // Remove the active class from the element that is currently active
    $(".active").removeClass("active");

    // Add the active class to the element that was just clicked
    $(this).addClass("active");

    return true;
});