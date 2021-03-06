document.querySelectorAll('a[href="#about-spicefest"], a[href="#outdoor-events"], a[href="#indoor-events"], a[href="#what-to-expect"]').forEach(function (anchor) {
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
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
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
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    centerPadding: 0,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                    centerPadding: 0,
                }
            }
        ]
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
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    centerPadding: 0,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                    centerPadding: 0,
                }
            }
        ]
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
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    centerPadding: 0,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                    centerPadding: 0,
                }
            }
        ]
    });

    if ($(window).width() < 1100) {
        $(".event-inclusion-slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            autoplaySpeed: 0,
            speed: 2000,
            cssEase: 'linear',
            infinite: true,
            centerMode: true,
            centerPadding: "60px",
            responsive: [
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 1,
                        centerMode: false,
                        centerPadding: 0,
                    }
                }
            ]
        })
    }
})