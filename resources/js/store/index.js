import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        prices: [],
        categories: [],
        manufacturers: [],
        products: [],
        loading: true,
        selected: {
            prices: [],
            categories: [],
            manufacturers: []
        },
        status: '',
        token: localStorage.getItem('token') || '',
        user : {}
    },
    getters : {
        isLoggedIn: state => !!state.token,
        authStatus: state => state.status,
    },

    mutations: {
        setProducts (state, data) {
            state.products = data;
        },

        setCategories (state, data) {
            state.categories = data;
        },

        setManufacturers (state, data) {
            state.manufacturers = data;
        },

        setPrices (state, data) {
            state.prices = data;
        },

        setLoading (state, data) {
            state.loading = data;
        },
        auth_request(state){
            state.status = 'loading'
        },
        auth_success(state, token, user){
            state.status = 'success'
            state.token = token
            state.user = user
        },
        auth_error(state){
            state.status = 'error'
        },
        logout(state){
            state.status = ''
            state.token = ''
        },
    },

    actions: {
        loadProducts ({commit, state}) {
            axios.get('/api/products', {
                params: state.selected
            })
                .then((response) => {
                    commit('setProducts', response.data.data);
                    commit('setLoading', false);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        loadCategories ({commit, state}) {
            axios.get('/api/categories', {
                params: _.omit(state.selected, 'categories')
            })
                .then((response) => {
                    commit('setCategories', response.data.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        loadManufacturers ({commit, state}) {
            axios.get('/api/manufacturers', {
                params: _.omit(state.selected, 'manufacturers')
            })
                .then((response) => {
                    commit('setManufacturers', response.data.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        loadPrices ({commit, state}) {
            axios.get('/api/prices', {
                params: _.omit(state.selected, 'prices')
            })
                .then((response) => {
                    commit('setPrices', response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        login({commit}, user){
            return new Promise((resolve, reject) => {
                commit('auth_request')
                axios.post( '/customer/login', user)
                    .then(response => {
                        const token = response.data.token
                        const user = response.data.user
                        localStorage.setItem('token', token)
                        axios.defaults.headers.common['Authorization'] = token
                        commit('auth_success', token, user)
                        resolve(response)
                    })
                    .catch(err => {
                        commit('auth_error')
                        localStorage.removeItem('token')
                        reject(err)
                    })
            })
        },
        register({commit}, user){
            return new Promise((resolve, reject) => {
                commit('auth_request')
                axios.post('/customer/create',user)
                    .then(response => {
                        const token = response.data.token
                        const user = response.data.user
                        localStorage.setItem('token', token)
                        axios.defaults.headers.common['Authorization'] = token
                        commit('auth_success', token, user)
                        resolve(response)
                    })
                    .catch(err => {
                        commit('auth_error', err)
                        localStorage.removeItem('token')
                        reject(err)
                    })
            })
        },
        logout({commit}){
            return new Promise((resolve, reject) => {
                commit('logout')
                localStorage.removeItem('token')
                delete axios.defaults.headers.common['Authorization']
                resolve()
            })
        }
    }
})
