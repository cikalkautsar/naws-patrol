import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 'resources/js/app.js',
                'resources/css/edukasi.css', 'resources/js/edukasi.js',
                'resources/css/style.css', 'resources/js/edukasi.js',
                'resources/css/lapor-hewan.css', 'resources/js/lapor-hewan.js',
                'resources/css/dashboard.css', 'resources/js/dashboard.js',
            ],
                
            refresh: true,
        }),
    ],
});
