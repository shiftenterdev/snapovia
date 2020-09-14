<template>
    <router-view></router-view>
</template>


<script>
    import Navbar from './Navbar'
    import Footer from './Footer'
    import Minicart from './global/Minicart'
    import Search from './global/Search'

    export default {
        components: {
            Navbar,
            Footer,
            Minicart,
            Search
        },
        computed: {
            isLoggedIn: function () {
                return this.$store.getters.isLoggedIn
            }
        },
        created: function () {
            axios.interceptors.response.use(undefined, function (err) {
                return new Promise(function (resolve, reject) {
                    if (err.status === 401 && err.config && !err.config.__isRetryRequest) {
                        this.$store.dispatch(logout)
                    }
                    throw err;
                });
            });
        },
        methods: {
            logout: function () {
                this.$store.dispatch('logout')
                    .then(() => {
                        this.$router.push('/login')
                    })
            }
        }
    }
</script>
