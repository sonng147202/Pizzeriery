import Vue from 'vue'

import VueRouter from 'vue-router'

import { routes } from './routes/index'

import App from './App.vue';

import store from './store/index';

Vue.use(VueRouter)

const router = new VueRouter({
    routes 
})

new Vue({
    render: h => h(App),
    router,
    store
}).$mount('#root')