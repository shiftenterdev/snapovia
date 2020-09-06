require('./bootstrap')

import store from './store/index'

import App from './components/App.vue'

import router from './routes'

const app = new Vue(Vue.util.extend({ router, store }, App)).$mount('#app')
