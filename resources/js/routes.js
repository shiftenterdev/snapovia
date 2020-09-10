import VueRouter from 'vue-router';
import store from './store/index'
import WelcomePage from './pages/WelcomePage'
import ShippingPage from './pages/cmspage/ShippingPage'
import FaqPage from './pages/cmspage/FaqPage'
import ContactPage from './pages/cmspage/ContactPage'
import CustomerLoginPage from './pages/customer/auth/CustomerLoginPage'
import BlogPage from './pages/blog/BlogPage'
import BlogDetailsPage from './pages/blog/BlogDetailsPage'
import SearchPage from './pages/SearchPage'
import CartPage from './pages/CartPage'
import CheckoutPage from './pages/CheckoutPage'
import CheckoutSuccessPage from './pages/CheckoutSuccessPage'



let routes = new VueRouter({
    mode: 'history',
    routes: [
        {
            name: 'welcome',
            path: '/',
            component: WelcomePage
        },
        {
            name: 'shipping',
            path: '/shipping-and-returns',
            component: ShippingPage
        },
        {
            name: 'faq',
            path: '/faq',
            component: FaqPage
        },
        {
            name: 'contact',
            path: '/contact',
            component: ContactPage
        },
        {
            name: 'customer.login',
            path: '/customer/login',
            component: CustomerLoginPage
        },
        {
            name: 'blog',
            path: '/blog',
            component: BlogPage,
            meta: {
                requiresAuth: true
            }
        },
        {
            name: 'search',
            path: '/search',
            component: SearchPage
        },
        {
            name: 'cart',
            path: '/checkout/cart',
            component: CartPage
        },
        {
            name: 'checkout',
            path: '/checkout',
            component: CheckoutPage
        },
        {
            name: 'checkout.success',
            path: '/checkout/success',
            component: CheckoutSuccessPage
        }
    ],
    scrollBehavior () {
        return { x: 0, y: 0 }
    }
});

routes.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
        if (store.getters.isLoggedIn) {
            next()
            return
        }
        next('/customer/login')
    } else {
        next()
    }
})

export default routes;
