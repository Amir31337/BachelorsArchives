$(document).ready(function() {
    $("#owl-example").owlCarousel({
        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        margin: 10,
        paginationSpeed: 400,
        autoplay: false,
        items: 2,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        loop: true,
        nav: true,
        center: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            },
            1000:{
                items:3
            }
        },
        navText: ["<i class='fa fa-angle-left' aria-hidden='true'><</i>", "<i class='fa fa-angle-right' aria-hidden='true'>></i>"]
    });
});
