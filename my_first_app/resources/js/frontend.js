import Swiper from 'swiper/bundle';

document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.tech-swiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,
        speed: 2000,
        allowTouchMove: false,
        simulateTouch: false,
        direction: 'horizontal',
        autoplay: { delay: 0 },
        freeMode: true,
        breakpoints: {
            640: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 5,
            },
            1280: {
                slidesPerView: 6,
            },
        }
    });
});
