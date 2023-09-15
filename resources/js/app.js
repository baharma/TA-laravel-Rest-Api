import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue'
import HelloVue from './components/HelloVue'

const app = createApp({})

app.component('hello-vue', HelloVue)

app.mount('#app')
window.Alpine = Alpine;


Alpine.start();




