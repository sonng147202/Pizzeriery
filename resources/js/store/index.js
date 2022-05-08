import Vue from 'vue'
import Vuex from 'vuex'
import Auth from './modules/auth'
import User from './modules/user'
import Cart from './modules/cart'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        Auth,
        User,
        Cart
    }
})