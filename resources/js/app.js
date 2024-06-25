import './bootstrap';
import '../css/app.css';
import { createApp, markRaw } from 'vue/dist/vue.esm-bundler.js';
import { createRouter, createWebHistory, useRoute } from 'vue-router'
import { routes } from './Routes/routes.js';

import { createPinia } from 'pinia';

const router = createRouter({
    history: createWebHistory(),
    routes : routes
})

//Pinia.js

const pinia = createPinia()

pinia.use(({store}) => {
    store.router = markRaw(router)
    store.route = markRaw(useRoute())
})

const app = createApp({

});

app.use(pinia)

app.use(router);
// app.component('sample-component', Compo);
app.mount("#app");