import './bootstrap';

document.addEventListener('DOMContentLoaded', (event) => {
    const hamburgerButton = document.querySelector('#hamburger-button');
    hamburgerButton.addEventListener('click', () => {
        const menu = document.querySelector('#menu');
        menu.classList.toggle('hidden');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var carousel = document.querySelector('[data-carousel="static"]');
    var carouselItems = carousel.querySelectorAll('[data-carousel-item]');
    var prevButton = carousel.querySelector('[data-carousel-prev]');
    var nextButton = carousel.querySelector('[data-carousel-next]');
    var activeSlide = 0;

    function updateCarousel() {
        carouselItems.forEach(function(item, index) {
            item.style.display = index === activeSlide ? 'block' : 'none';
        });
    }

    prevButton.addEventListener('click', function() {
        activeSlide = activeSlide === 0 ? carouselItems.length - 1 : activeSlide - 1;
        updateCarousel();
    });

    nextButton.addEventListener('click', function() {
        activeSlide = activeSlide === carouselItems.length - 1 ? 0 : activeSlide + 1;
        updateCarousel();
    });

    updateCarousel();
});
