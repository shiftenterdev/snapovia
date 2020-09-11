<template>
    <BaseLayout>

        <HighlightMessage/>

        <Banner/>

        <Feature/>

        <BestPicks/>

        <ProductSection/>

        <Countdown/>

        <Review/>

        <Brand/>

    </BaseLayout>
</template>

<script>
    import Feature from "../components/Home/Feature";
    import BestPicks from "../components/Home/BestPicks";
    import ProductSection from "../components/Home/ProductSection";
    import Countdown from "../components/Home/Countdown";
    import Review from "../components/Home/Review";
    import Brand from "../components/Home/Brand";
    import Banner from "../components/Home/Banner";
    import HighlightMessage from "../components/Home/HighlightMessage";
    import BaseLayout from "../layouts/BaseLayout";

    export default {
        components: {
            BaseLayout,
            HighlightMessage,
            Banner,
            Feature,
            BestPicks,
            ProductSection,
            Countdown,
            Review,
            Brand,
        }
    }
</script>

<style scoped>
</style>
