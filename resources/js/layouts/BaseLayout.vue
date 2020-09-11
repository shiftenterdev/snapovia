<template>
    <div>
        <Navbar/>
        <Minicart/>
        <Search/>
        <slot/>
        <Footer/>
    </div>
</template>

<script>
    import Navbar from "../components/Navbar";
    import Search from "../components/global/Search";
    import Footer from "../components/Footer";
    import Minicart from "../components/global/Minicart";
    export default {
        name:'BaseLayout',
        components:{
            Navbar,
            Minicart,
            Search,
            Footer
        }
    }
</script>
