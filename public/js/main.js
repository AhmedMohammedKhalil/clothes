var swiper = new Swiper(".slide-container .slide-content", {
    slidesPerView: 3,
    spaceBetween: 1,
    loop: true,
    centerSlide: 'false',
    fade: true,
    grabCursor: 'false',

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
    autoplay: {
      delay: 2000,
    },
});


$(".slide-container .slide-content").hover(function() {
    (this).swiper.autoplay.stop();
}, function() {
    (this).swiper.autoplay.start();
});



var swiper = new Swiper(".slide-container-2 .slide-content", {
    slidesPerView: 3,
    spaceBetween: 1,
    loop: true,
    centerSlide: 'false',
    fade: true,
    grabCursor: 'false',

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
    autoplay: {
      delay: 2000,
    },
});


$(".slide-container-2 .slide-content").hover(function() {
    (this).swiper.autoplay.stop();
}, function() {
    (this).swiper.autoplay.start();
});

