import store from "../store"; // your vuex store

import Home from "../views/Home.vue";
import Products from "../views/Products.vue";
import Cart from "../views/Cart.vue";
import Login from "../views/Auth/Login.vue";
import Register from "../views/Auth/Register.vue";
import { ifNotAuthenticated, ifAuthenticated } from "../helper/routingAuth";

export const routes = [
    {
        path: "/",
        component: Home,
        name: 'Home'
    },
    {
        path: "/products",
        component: Products,
        name: 'Products'
    },
    {
        path: "/cart",
        component: Cart,
        name: 'Cart'
    },
    {
        path: "/auth/login",
        component: Login,
        name: 'Login',
        beforeEnter: ifNotAuthenticated,
    },
    {
        path: "/auth/register",
        component: Register,
        name: 'Register',
        beforeEnter: ifNotAuthenticated,
    },
];
