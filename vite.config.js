import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/scss/app.scss'],
            refresh: true,
        }),
        vue(), // Configuración para Vue.js 3
    ],
    resolve: {
        alias: {
          'vue': 'vue/dist/vue.esm-bundler.js' // Configuración del alias
        }
      }
});
