// Main arousel
$(function () {
    // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        items: 1,
        margin: 10,
        loop: true,
        nav: true,
        autoplay: true,
        dots: true,
        mouseDrag: true,
    });
    $(".owl-prev").html('<span class="fa fa-arrow-left"></span>');
    $(".owl-next").html('<span class="fa fa-arrow-right"></span>');
});
// Main arousel


// about carousel
// $('.owlslider2').owlCarousel({
//     loop: true,
//     nav: true,
//     dots: true,
//     items: 1,
//     autoplay: true,
//     autoplayHoverPause: true,
//     autoplayTimeout: 2000,
//     mouseDrag: true,
//     dotsdata:true,
//     responsive: {
//         0: {
//             items: 0
//         },

//         600: {
//             items: 1
//         },

//         1024: {
//             items: 1
//         },

//         1366: {
//             items: 1
//         }
//     }

// });
// about carousel



// blog carousel
$('.owlslider3').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    items: 1,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 2500,
    mouseDrag: true,
    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 1
        },

        1024: {
            items: 3
        },

        1366: {
            items: 3
        }
    }
});
// blog carousel



// bod carousel
$('.owlslider4').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    items: 5,
    autoplay: false,
    autoplayHoverPause: true,
    autoplayTimeout: 2500,
    mouseDrag: true,
    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 1
        },

        1024: {
            items: 5
        },

        1366: {
            items: 5
        }
    }
});
// bod carousel