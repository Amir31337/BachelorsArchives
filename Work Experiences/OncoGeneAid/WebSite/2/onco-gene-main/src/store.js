import Vue from "vue";
import Vuex from 'vuex';

Vue.use(Vuex);

import index_store from './components/index/Store.js';
import main_store from './MainStore.js';

export const store = new Vuex.Store({
    modules: {
        index_store,
        main_store
    }
});
