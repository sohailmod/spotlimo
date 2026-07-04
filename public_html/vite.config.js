import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/circle.css',
                'resources/css/square.css',
                'resources/js/circle.js',
                'resources/js/calculate-price.js',
                'resources/js/phone-number-validation.js',
                'resources/js/vehicle-booking.js',               
            ],
            refresh: true,
        }),
    ],
});
