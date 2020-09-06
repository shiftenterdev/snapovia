<template>
    <div>
        <Navbar/>
        <router-view></router-view>
        <Footer/>
    </div>
</template>


<script>
    import Navbar from './Navbar'
    import Footer from './Footer'
    export default {
        components:{
            Navbar,
            Footer
        }
    }
</script>
