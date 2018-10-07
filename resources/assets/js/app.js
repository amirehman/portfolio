require('./bootstrap');


import Buefy from 'buefy'
import Vuex from 'vuex'
import storeData from './store.js'
import {initialize} from './helpers/general';
import router from './Router/router.js'


window.Vue = require('vue');
Vue.use(Buefy);

Vue.use(Vuex);

const store = new Vuex.Store(storeData);
initialize(store, router);




 Vue.component('AppHome', require('./components/backend/AppHome.vue'));
 Vue.component('DashMenu', require('./components/backend/DasbhoardMenu.vue')); 

const app = new Vue({
    el: '#app', 
        router,
        store
});
