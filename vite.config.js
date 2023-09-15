import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "vue"

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),vue(),
    ], resolve: {
        alias: {
            "~": "/node_modules",
        },
    },
});
