import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'resources/assets/dist/css/style.css',
                
                'resources/assets/src/vendors/hc-sticky/dist/hc-sticky.js',
                'resources/assets/src/vendors/glightbox/dist/js/glightbox.min.js',
                'resources/assets/src/vendors/@splidejs/splide/dist/js/splide.min.js',
                'resources/assets/src/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js',
                'resources/assets/src/js/theme.js',
                'resources/assets/dist/js/scripts.js',
            ],
            refresh: true,
        }),
    ],
});
