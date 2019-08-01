
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import axios from 'axios';
Vue.use(axios);

import HomeComponent from './components/HomeComponent.vue';
import HotelComponent from './components/HotelComponent.vue';
import RoomComponent from './components/RoomComponent.vue';
import PriceComponent from './components/PriceComponent.vue';

const routes = [
    {
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        name: 'hotel',
        path: '/hotel',
        component: HotelComponent
    },
    {
        name: 'room',
        path: '/room',
        component: RoomComponent
    },
    {
        name: 'price',
        path: '/price',
        component: PriceComponent
    }
];

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/Example.vue'));
Vue.component('home-component', require('./components/HomeComponent.vue'));
Vue.component('hotel-component', require('./components/HotelComponent.vue'));
Vue.component('room-component', require('./components/RoomComponent.vue'));
Vue.component('price-component', require('./components/PriceComponent.vue'));
Vue.component('app-component', require('./App.vue'));

// const app = new Vue({
//     el: '#app'
// });

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router })).$mount('#app');