import { defineConfig, loadEnv } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default ({ mode }) => {
    process.env = { ...process.env, ...loadEnv(mode, process.cwd()) };

    return defineConfig({
        server: { host: 'snapovia.test' },
        plugins: [
            laravel({
                input: [
                    'resources/js/app.js',
                    'resources/sass/app.scss',
                ],
                refresh: [
                    ...refreshPaths,
                    'app/Http/Livewire/**'
                ],
            }),
            vue({
                template: {
                    transformAssetUrls: {
                        base: null,
                        includeAbsolute: false,
                    },
                },
            }),
        ],
    });
};
