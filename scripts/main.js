// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(() => {
    $(".about-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: 'linear',
        infinite: true,
        centerPadding: "60px",
    })

    $(".cuisine-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: 'linear',
        infinite: true,
        centerPadding: "120px",
        centerMode: true,
    });

    $(".children-entertainment-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: 'linear',
        infinite: true,
    });

    $(".main-dances-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: 'linear',
        infinite: true,
        centerPadding: "120px",
        centerMode: true,
    });
})