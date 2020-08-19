require('./bootstrap');

window.Vue = require('vue');
import store from './store';
import $ from 'jquery';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
window.axios = axios;
window.$ = $;

import App from './components/App.vue';
Vue.use(VueAxios, axios);
import Loading from 'vue-loading-overlay';
// Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.css';
// Init plugin
Vue.use(Loading);

import routes from './routes';

const router = new VueRouter({ mode: 'history', routes: routes,scrollBehavior() {
        return {x: 0, y: 0}
    }});
const app = new Vue(Vue.util.extend({ router,store }, App)).$mount('#app');