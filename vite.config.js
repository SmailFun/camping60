import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/style.css',
                'resources/assets/css/apps/invoice-add.css',
                'resources/assets/css/apps/invoice-edit.css'
            ],
            refresh: true,
        }),
    ],
});
