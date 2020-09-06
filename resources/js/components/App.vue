<template>
    <div>
        <Navbar/>
        <router-view></router-view>
        <Footer/>
        <Search/>
    </div>
</template>


<script>
    import Navbar from './Navbar'
    import Footer from './Footer'
    import Search from './global/Search'
    export default {
        components:{
            Navbar,
            Footer,
            Search
        }
    }
</script>
