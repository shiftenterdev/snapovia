<template>
    <div>
        <Navbar/>
        <child/>
        <Footer/>
    </div>
</template>

<script>
    import Navbar from "../components/Navbar";
    import Footer from "../components/Footer";
    export default {
        name: 'BasicLayout',
        components:{
            Navbar,
            Footer
        }
    }
</script>

<style lang="scss">

</style>
