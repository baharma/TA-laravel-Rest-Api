import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue/dist/vue.esm-bundler.js'

import HelloVue from './components/HelloVue.vue'

const app = createApp({})

app.component('hello-vue', HelloVue)

app.mount('#app')
window.Alpine = Alpine;


Alpine.start();




