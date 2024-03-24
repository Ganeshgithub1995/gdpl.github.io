// sticky header
$(window).scroll(function (event) {
    if ($(document).scrollTop() < 1) {
        $('.header').removeClass('fixed');
        $('.header').removeClass('active');

    } else if ($(document).scrollTop() > 100) {
        $('.header').removeClass('fixed');
        $('.header').addClass('active');
    } else {
        $('.header').addClass('fixed');
    }
});



// ===== Scroll to Top ==== 
window.addEventListener('scroll', function () {
    var scroll = document.querySelector('.up-arrow');
    scroll.classList.toggle("active", window.scrollY > 0)
});


function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
};