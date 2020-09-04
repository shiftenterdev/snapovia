<template>
    <div>
        <Navbar/>

        <div class="py-3 bg-dark bg-pattern mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-white">
                            <span class="heading-xxs letter-spacing-xl">
                                ⚡️ Happy Holiday Deals on Everything ⚡️
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <Banner/>

        <Feature/>

        <BestPicks/>

        <Countdown/>

        <Review/>

        <Brand/>

        <Footer/>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import Navbar from "../components/Navbar";
    import Footer from "../components/Footer";
    import Feature from "../components/Home/Feature";
    import BestPicks from "../components/Home/BestPicks";
    import Countdown from "../components/Home/Countdown";
    import Review from "../components/Home/Review";
    import Brand from "../components/Home/Brand";
    import Banner from "../components/Home/Banner";
    import Flickity from 'flickity';

    export default {
        layout: 'basic',

        components: {
            Navbar,
            Banner,
            Feature,
            BestPicks,
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
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .title {
        font-size: 85px;
    }
</style>
