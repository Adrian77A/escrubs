import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/main.js',
                'resources/js/map-custom.js',
                'resources/js/slick-custom.js',
                'resources/css/main.css', 
                'resources/css/util.css', 
            ],
            refresh: true,
        }),
    ],
});
