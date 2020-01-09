$(document).ready(function() {
    $('.fonctionnality').mouseenter(function() {
        $('.f-row .fonctionnality i').css('display', 'block')
    })
    $('.accueil-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

})