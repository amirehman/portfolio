import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


import Login from '../components/Auth/Login'



const routes = [
  { path: '/me/login', component: Login }
]

const router = new VueRouter({
  hashbang: false,
  mode: 'history',
  routes // short for `routes: routes`
})


export default router