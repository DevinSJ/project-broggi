/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

import { BootstrapVue } from "bootstrap-vue";
import VueRouter from "vue-router";
import SvgVue from "svg-vue";
import ChartJs from "vue-chartjs";
import Moment from "vue-moment";

window.Vue = require("vue").default;
window.Vue.use(BootstrapVue); //Styling with bootstrap components.
window.Vue.use(VueRouter); //SPA vue router.
window.Vue.use(SvgVue); //Load svg before to start app.
window.Vue.use(ChartJs); //Graphs in js.
window.Vue.use(Moment); //Format date.

//Components
const files = require.context("./", true, /\.vue$/i);
files
    .keys()
    .map((key) => {
        if (!key.startsWith("./pages/")) Vue.component(key.split("/").pop().split(".")[0], files(key).default);
    }
);

Vue.component("pagination", require("laravel-vue-pagination"));

//Pages
Vue.component("login", require("./pages/Login.vue").default);
const Expedients = Vue.component("expedients", require("./pages/Expedients.vue").default);
const Calls = Vue.component("calls", require("./pages/Calls.vue").default);
const Graphs = Vue.component("graphs", require("./pages/Graphs.vue").default);
const Users = Vue.component("users", require("./pages/Users.vue").default);
const NotFound = Vue.component(
    "notfound",
    require("./pages/NotFound.vue").default
);

const router = new VueRouter({
    base: "/",
    mode: "history",
    routes: [
        { path: "/expedients", component: Expedients },
        { path: "/trucades", component: Calls },
        { path: "/grafics", component: Graphs },
        { path: "/usuaris", component: Users },
        { path: "*", component: NotFound },
    ],
});

router.beforeEach((to, from, next) => {
    if (window.Vue.prototype.$inCallForm){
        next(false);
    } else {
        return next(); // navigate to next "page" as usual
    }
});

const app = new Vue({
    el: "#app",
    router,
});
