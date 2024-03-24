    $(document).ready(function(){
    // On init event
    // $('.customer-logos').on('init', function(event, slick){
    //     console.log('.customer-logos init');
      
    //           AOS.init({
    //               easing: 'ease-out-back',
    //               duration: 1000
    //           });
    //   });

    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,    
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });

});
