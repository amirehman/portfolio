import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


import Login from '../components/Auth/Login'
import Signup from '../components/Auth/Signup'

//Backend Components
import Dashboard from '../components/backend/Dashboard'


//Frontend Components


const routes = [
  { 
    path: '/me/login', 
    component: Login, 
    name: 'login' 
  },
  { 
    path: '/me/signup', 
    component: Signup, 
    name: 'signup' 
  },
  { 
    path: '/me/dashboard', 
    component: Dashboard, 
    name: 'dashboard',
    meta: {
      requiresAuth: true
  } 
  }
]

const router = new VueRouter({
  hashbang: false,
  mode: 'history',
  routes // short for `routes: routes`
})


export default router