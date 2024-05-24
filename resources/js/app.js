import './bootstrap';

document.addEventListener('DOMContentLoaded', (event) => {
    const hamburgerButton = document.querySelector('#hamburger-button');
    hamburgerButton.addEventListener('click', () => {
        const menu = document.querySelector('#menu');
        menu.classList.toggle('hidden');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var carousel = document.querySelector('[data-carousel="static"]');
    var carouselItems = carousel.querySelectorAll('[data-carousel-item]');
    var prevButton = carousel.querySelector('[data-carousel-prev]');
    var nextButton = carousel.querySelector('[data-carousel-next]');
    var activeSlide = 0;

    function updateCarousel() {
        carouselItems.forEach(function (item, index) {
            item.style.display = index === activeSlide ? 'block' : 'none';
        });
    }

    prevButton.addEventListener('click', function () {
        activeSlide = activeSlide === 0 ? carouselItems.length - 1 : activeSlide - 1;
        updateCarousel();
    });

    nextButton.addEventListener('click', function () {
        activeSlide = activeSlide === carouselItems.length - 1 ? 0 : activeSlide + 1;
        updateCarousel();
    });

    updateCarousel();
});

document.addEventListener('DOMContentLoaded', function () {
    const addAttractionsButton = document.querySelector('#addAttraction');
    const addAttractionForm = document.querySelector('#addAttractionForm');

    if (addAttractionsButton) {
        addAttractionsButton.addEventListener('click', function () {
            addAttractionForm.classList.toggle('hidden');
        })
    }
});

window.addEventListener('DOMContentLoaded', (event) => {
    var slideshows = document.querySelectorAll('[data-carousel="static"]');

    slideshows.forEach(function (slideshow) {
        var currentSlideIndex = 0;
        var slides = slideshow.querySelectorAll('[data-carousel-item] img');
        showSlides(slideshow, currentSlideIndex);

        var prevButton = slideshow.querySelector("[data-carousel-prev]");
        var nextButton = slideshow.querySelector("[data-carousel-next]");

        prevButton.addEventListener('click', function () {
            currentSlideIndex = currentSlideIndex > 0 ? currentSlideIndex - 1 : slides.length - 1;
            showSlides(slideshow, currentSlideIndex);
        });

        nextButton.addEventListener('click', function () {
            currentSlideIndex = currentSlideIndex < slides.length - 1 ? currentSlideIndex + 1 : 0;
            showSlides(slideshow, currentSlideIndex);
        });
    });

    function showSlides(slideshow, n) {
        var slides = slideshow.querySelectorAll('[data-carousel-item] img');
        slides.forEach((slide, index) => {
            slide.style.display = index === n ? 'block' : 'none';
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const visitAccommodation = document.querySelector('#visitAccommodation');
    const visitAccommodationForm = document.querySelector('#visitAccommodationForm');

    if (visitAccommodation) {
        visitAccommodation.addEventListener('click', function () {
            visitAccommodationForm.submit();
        })
    }
});