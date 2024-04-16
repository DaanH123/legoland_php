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

    addAttractionsButton.addEventListener('click', function () {
        addAttractionForm.classList.toggle('hidden');
    })
});

window.addEventListener('DOMContentLoaded', (event) => {
    var slideshows = document.querySelectorAll('.slideshow-container');

    slideshows.forEach(function(slideshow) {
        var currentSlideIndex = 1;
        showSlides(slideshow, currentSlideIndex);

        var prevButton = slideshow.querySelector(".prev");
        var nextButton = slideshow.querySelector(".next");

        prevButton.addEventListener('click', function() {
            showSlides(slideshow, --currentSlideIndex);
        });

        nextButton.addEventListener('click', function() {
            showSlides(slideshow, ++currentSlideIndex);
        });
    });

    function showSlides(slideshow, n) {
        var i;
        var slides = slideshow.getElementsByClassName("mySlides");
        if (n > slides.length) { n = 1 }
        if (n < 1) { n = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[n - 1].style.display = "block";
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const visitAccommodation = document.querySelector('#visitAccommodation');
    const visitAccommodationForm = document.querySelector('#visitAccommodationForm');

    visitAccommodation.addEventListener('click', function () {
        visitAccommodationForm.submit();
    })
});