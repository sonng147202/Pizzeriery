import Home from '../views/Home.vue'
import Products from '../views/Products.vue'

export const routes = [
    { 
        path: '/', 
        component: Home 
    },
    { 
        path: '/products', 
        component: Products 
    },
]