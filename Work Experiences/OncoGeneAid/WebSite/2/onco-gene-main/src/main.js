import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false;
import router from './router'
import axios from 'axios'
import VueAxios from 'vue-axios';

Vue.use(VueAxios, axios);
import {BootstrapVue} from 'bootstrap-vue';

Vue.use(BootstrapVue);

import {store} from "./store";
window.store = store;

import Vuetify from "vuetify";
Vue.use(Vuetify);
window.Vuetify=Vuetify;
import '@mdi/font/css/materialdesignicons.css'

import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'bootstrap-select/dist/css/bootstrap-select.min.css';
import 'bootstrap-select/dist/js/bootstrap-select.min.js';
import 'bootstrap-select/dist/js/i18n/defaults-fa_IR';
import './assets/font-awesome.min.css';
import 'vuetify/dist/vuetify.min.css';
import './assets/app.css';

Vue.prototype.$siteUrl = 'http://localhost:8000';
Vue.prototype.$siteName = 'آنکوژن';
Vue.prototype.$base_url = '';

window.$ = require('jquery');

import 'jquery-ui/ui/widgets/sortable';

Vue.component('loading', require('./components/partials/Loading').default);
Vue.component('Breadcrumb', require('./components/partials/Breadcrumb').default);
Vue.component('account-status', require('./components/partials/AccountStatus').default);
Vue.component('server-error-message', require('./components/partials/ServerErrorMessage').default);
Vue.component('site_header', require('./components/partials/Header').default);
Vue.component('site_footer', require('./components/partials/Footer').default);
Vue.component('shop-nav', require('./components/include/ShopNav').default);
Vue.component('auth-menu', require('./components/user/AuthMenu').default);

new Vue({
    router,
    render: h => h(App),
    store,
    vuetify: new Vuetify(),
}).$mount('#app')
