import Home from '../views/Home.vue'
import Products from '../views/Products.vue'
import Cart from '../views/Cart.vue'

export const routes = [
    { 
        path: '/', 
        component: Home 
    },
    { 
        path: '/products', 
        component: Products 
    },
    { 
        path: '/cart', 
        component: Cart 
    },
]