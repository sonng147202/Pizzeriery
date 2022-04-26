import Vue from 'vue'

import VueRouter from 'vue-router'

import VueCookies from 'vue-cookies';

import { routes } from './routes/index'

import App from './App.vue';

import store from './store/index';

Vue.use(VueRouter);

Vue.use(VueCookies);

const router = new VueRouter({
    mode: 'history',
    routes 
})

new Vue({
    render: h => h(App),
    router,
    store
}).$mount('#root')