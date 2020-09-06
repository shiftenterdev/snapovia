<template>
    <div>
        <Navbar/>
        <Minicart/>
        <Search/>
        <router-view></router-view>
        <Footer/>
    </div>
</template>


<script>
    import Navbar from './Navbar'
    import Footer from './Footer'
    import Minicart from './global/Minicart'
    import Search from './global/Search'
    export default {
        components:{
            Navbar,
            Footer,
            Minicart,
            Search
        }
    }
</script>
