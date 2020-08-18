window.Vue = require('vue');
import Vuex from 'vuex';
import createPersistedState from 'vuex-persistedstate';
Vue.use(Vuex);

const store = new Vuex.Store({
    state:{
        cartQty:0,
        isAuthenticated:false,
        openModal:false
    },
    plugins: [createPersistedState()],
    mutations: {
        increment: state => state.cartQty++,
        decrement: state => state.cartQty--,
        makeAuthenticated: state=>{
            state.isAuthenticated=true;
        },
        makeLogout: state=>{
            state.isAuthenticated=false;
        }
    }
});

export default store;