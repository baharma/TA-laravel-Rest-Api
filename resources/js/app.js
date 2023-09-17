import './bootstrap';
import axios from "axios";
import Alpine from 'alpinejs';
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import Route from './route/index.js'


window.Alpine = Alpine;
window.axios = axios;
const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.axios.defaults.headers.common["X-CSRF-TOKEN"] = csrfToken;

axios.defaults.baseURL = 'http://localhost:8000/api/';
axios.defaults.headers['Authorization'] = `Bearer ${localStorage.getItem('token')}`;




Alpine.start();

const app = Route;

app.mount('#apps-vue')
