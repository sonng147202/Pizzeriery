import Home from '../views/Home.vue'
import Data from '../views/Data.vue'
import Auth from '../views/Auth.vue'


export const routes = [
    { 
        path: '/', 
        component: Home 
    },
    { 
        path: '/data', 
        component: Data 
    },
    { 
        path: '/auth', 
        component: Auth 
    }
]