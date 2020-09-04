<template>
    <div>
        <HighlightMessage/>

        <Banner/>

        <Feature/>

        <BestPicks/>

        <ProductSection/>

        <Countdown/>

        <Review/>

        <Brand/>

    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import Navbar from "../components/Navbar";
    import Footer from "../components/Footer";
    import Feature from "../components/Home/Feature";
    import BestPicks from "../components/Home/BestPicks";
    import ProductSection from "../components/Home/ProductSection";
    import Countdown from "../components/Home/Countdown";
    import Review from "../components/Home/Review";
    import Brand from "../components/Home/Brand";
    import Banner from "../components/Home/Banner";
    import HighlightMessage from "../components/Home/HighlightMessage";

    export default {
        layout: 'basic',

        components: {
            Navbar,
            HighlightMessage,
            Banner,
            Feature,
            BestPicks,
            ProductSection,
            Countdown,
            Review,
            Brand,
            Footer
        },

        metaInfo() {
            return {title: this.$t('home')}
        },

        data: () => ({
            title: window.config.appName
        }),

        computed: mapGetters({
            authenticated: 'auth/check'
        })
    }
</script>

<style scoped>

</style>
