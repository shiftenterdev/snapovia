require('./bootstrap')

window.Vue = require('vue')
import store from './store/index'
import $ from 'jquery'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

window.$ = $

import App from './components/App.vue'

import routes from './routes'

const router = new VueRouter({
    mode: 'history',
    routes: routes,
    scrollBehavior () {
        return { x: 0, y: 0 }
    }
})
const app = new Vue(Vue.util.extend({ router, store }, App)).$mount('#app')
