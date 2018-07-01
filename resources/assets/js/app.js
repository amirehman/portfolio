
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';


Vue.use(Buefy);



import router from './Router/router.js'

 Vue.component('AppHome', require('./components/backend/AppHome.vue'));
 Vue.component('SideNav', require('./components/backend/SideNav.vue'));

const app = new Vue({
    el: '#app',
        router
});
