import Vue from "vue";

export default {
    namespaced: true,
    state: () => ({
        show_loading: false,
        server_error: false,
        category: {},
    }),
    mutations: {
        showLoading: function (state) {
            state.show_loading = true;
        },
        hideLoading: function (state) {
            state.show_loading = false;
        },
        setCatch: function ({commit}) {
            commit('hideLoading');
            this.show_server_error();
        },
        show_server_error: function (state) {
            state.server_error = true;
            setTimeout(function () {
                state.server_error = false
            }, 5000);
        }
    },
    actions: {
        getCategoryListHeader({state, commit,dispatch}) {
            const url = Vue.prototype.$siteUrl + '/api/share/get_cat';
            commit('showLoading');
            Vue.axios.get(url).then(response => {
                commit('hideLoading');
                if (response.data.original.category != undefined) {
                    state.category = response.data.original.category;
                } else {
                    dispatch("getCategoryListHeader");
                }
            }).catch(() => {
                dispatch("getCategoryListHeader");
            });
        }
    }
}
