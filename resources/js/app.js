import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';

import Splide from '@splidejs/splide';
import 'hc-sticky/dist/hc-sticky.js';
import 'hc-sticky/dist/hc-sticky.js';
import '@splidejs/splide/dist/js/splide.min.js';
import '../assets/dist/js/scripts.js';

document.addEventListener('DOMContentLoaded', function () {
    var mainCarousel = new Splide('#main-carousel-1', {
        type: 'fade',
        height: '15rem',
        cover: true,
    }).mount();

    var thumbnailCarousel = new Splide('#thumbnail-carousel-1', {
        fixedWidth: 100,
        fixedHeight: 64,
        isNavigation: true,
        gap: 10,
        focus: 'center',
        pagination: false,
        cover: true,
        breakpoints: {
            600: {
                fixedWidth: 66,
                fixedHeight: 40,
            },
        },
    }).mount();

    mainCarousel.sync(thumbnailCarousel);

    mainCarousel.on('move', function (newIndex) {
        var slides = document.querySelectorAll('.splide__slide');
        slides.forEach(function(slide) {
            var audio = slide.querySelector('audio');
            console.log('Audio: ---------',audio);
            if (audio) {
                audio.pause();
                audio.currentTime = 0;
            }
        });

        var currentSlide = mainCarousel.Components.Slides.getAt(newIndex).slide;
        var audio = currentSlide.querySelector('audio');
        if (audio) {
            audio.play();
        }
    });

    mainCarousel.on('drag', function () {
        var slides = document.querySelectorAll('.splide__slide');
        slides.forEach(function(slide) {
            var audio = slide.querySelector('audio');
            if (audio) {
                audio.pause();
            }
        });
    });
});





window.Alpine = Alpine;

Alpine.start();


import '../assets/src/js/theme';