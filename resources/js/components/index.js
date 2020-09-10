import Vue from 'vue'
import Breadcrumb from "./Breadcrumb";
import Minicart from "./global/Minicart";
import Search from "./global/Search";



// Components that are registered globaly.
[
    Breadcrumb,
    Minicart,
    Search
].forEach(Component => {
    Vue.component(Component.name, Component)
})
