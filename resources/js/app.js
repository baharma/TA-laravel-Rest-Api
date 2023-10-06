import './bootstrap';
import axios from "axios";
import Alpine from 'alpinejs';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import Route from './route/index.js'


import 'dropify/dist/js/dropify';





window.Alpine = Alpine;

window.axios = axios;
const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.axios.defaults.headers.common["X-CSRF-TOKEN"] = csrfToken;


Alpine.start();

const app = Route;

app.mount('#apps-vue')


$(".dropify").dropify({
    messages: {
        default: "Drop or click here",
        replace: "Drag and drop or click to replace",
        remove: "Remove",
        error: "Ooops, something wrong happended.",
    },
    tpl: {
        message: `<div class="dropify-message file-upload-desc">
        <div class="dropify-header mb-3">
            <span class="file-icon" />
            <p>{{ default }}</p>
        </div>
        <p class="desc">To upload file of max. 2 MB
        (only PNG, JPG, JPEG files are allowed)</p>
        </div>`,
    },
});
