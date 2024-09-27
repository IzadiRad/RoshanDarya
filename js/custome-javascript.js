var swiper = new Swiper(`[unique-script-id="w-w-dm-id"] .mySwiper`, {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: `[unique-script-id="w-w-dm-id"] .swiper-pagination`,
        clickable: true,
    },
    breakpoints: {

        200: {
            slidesPerView: 1
        },

        501: {
            slidesPerView: 1.5
        },

        769: {
            slidesPerView: 2.5,
            spaceBetween: 10
        },
        1025: {
            slidesPerView: 3,
            spaceBetween: 20
        },
    }
});