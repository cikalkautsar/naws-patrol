import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 'resources/js/app.js',
                'resources/css/navbar.css', 'resources/js/navbar.js',
                'resources/css/donasi.css', 'resources/js/donasi.js',
                'resources/css/dataPendonasi.css', 'resources/js/dataPendonasi.js',
                'resources/css/metodeDonasi.css', 'resources/js/metodeDonasi.js',
                'resources/css/pembayaranDonasi.css', 'resources/js/pembayaranDonasi.js',
                'resources/css/qrDonasi.css', 'resources/js/qrDonasi.js',
            ],
            refresh: true,
        }),
    ],
});
