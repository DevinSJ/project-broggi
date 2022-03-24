/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import { BootstrapVue } from 'bootstrap-vue';
import VueRouter from 'vue-router';
// import "bootstrap-vue/dist/bootstrap-vue.css";

window.Vue = require('vue').default;
window.Vue.use(BootstrapVue);
window.Vue.use(VueRouter);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const Expedients = Vue.component('expedients', require('./pages/Expedients.vue').default);
const Calls = Vue.component('calls', require('./pages/Calls.vue').default);
const Graphs = Vue.component('graphs', require('./pages/Graphs.vue').default);
const Users = Vue.component('users', require('./pages/Users.vue').default);
const NotFound = Vue.component('notfound', require('./pages/NotFound.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/expedients', component: Expedients },
        { path: '/trucades', component: Calls },
        { path: '/grafics', component: Graphs },
        { path: '/usuaris', component: Users },
        { path: '*', component: NotFound }
    ]
});

const app = new Vue({
    el: '#app',
    router
});

