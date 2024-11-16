const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 3, // Exibe 3 itens em telas grandes
            spaceBetween: 40,
        },
        768: {
            slidesPerView: 2, // Exibe 2 itens em tablets
            spaceBetween: 30,
        },
        480: {
            slidesPerView: 1, // Exibe 1 item em telas pequenas
            spaceBetween: 20,
        }
    }
});
