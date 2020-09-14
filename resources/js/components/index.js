import Vue from 'vue'
import Breadcrumb from "./Breadcrumb";
import Minicart from "./global/Minicart";
import Search from "./global/Search";
import BaseLayout from "../layouts/BaseLayout";


[
    Breadcrumb,
    Minicart,
    BaseLayout,
    Search
].forEach(Component => {
    Vue.component(Component.name, Component)
})
