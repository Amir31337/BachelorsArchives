<template>
    <v-row id="product_box">
        <div class="col-12">
            <slot name="before-product-list"></slot>
            <div class="product_list_box">
                <div class="search_product_div product_list">

                    <slot name="product-list"
                          v-if="products.data.length===0 && sendProductRequest===false && clientRequest===false"></slot>

                    <template v-if="sendProductRequest===true">

                        <div v-for="i in 8" class="product_div" style="padding:15px">
                            <v-skeleton-loader
                                type=" image,list-item-two-line"
                            ></v-skeleton-loader>
                        </div>

                    </template>

                    <template v-else>

                        <template v-for="p in products.data">
                            <slot name="layout" :product="p"></slot>
                        </template>

                        <div class="product-list-paginate" v-if="products.data.length>0">
                            <product-pagination :pagination="products"
                                                @getList="paginate"
                                                :offset="5">

                            </product-pagination>
                        </div>

                        <div v-if="products.data.length===0 && sendProductRequest===false && clientRequest"
                             class="not_fount_product_message">
                            محصولی برای نمایش یافت نشد
                        </div>

                    </template>

                </div>
            </div>
        </div>
    </v-row>
</template>

<script>
import methods from "../methods";
import ProductPagination from "./ProductPagination";

export default {
    name: "DesktopFilterList",
    components: {ProductPagination},
    data() {
        return {
            filterList: {},
            boxStatus: {
                'brand': true,
            },
            checkbox: {},
            searchText: {},
            sendRequest: true,
            sort: 21,
            products: {data: []},
            sendProductRequest: false,
            has_product: false,
            has_ready_to_shipment: false,
            searchTextString: '',
            priceRange: [0, 4],
            min: 0,
            max: 100,
            clientRequest: false,
            selected_filter: []
        }
    },
    props: ['cat_id', 'max_price'],
    mounted() {
        this.getFilterList();
        const self = this;
        this.$nextTick(function () {
            const tags = document.getElementsByClassName('search-product');
            for (let i = 0; i < tags.length; i++) {
                const href = tags[i].href;
                tags[i].addEventListener('click', function (event) {
                    event.preventDefault();
                    self.setPageUrl(href);
                });
            }
        });

        if (window.location.href.indexOf('has_product=1') > -1) {
            this.has_product = true;
        }
        if (window.location.href.indexOf('has_ready_to_shipment=1') > -1) {
            this.has_ready_to_shipment = true;
        }
        let params = new window.URLSearchParams(window.location.search);
        if (params.get('string') !== null) {
            this.searchTextString = params.get('string');
        }

        if (this.max_price > 0) {
            this.max = this.max_price;
            if (params.get('price[min]') !== null) {
                this.priceRange[0] = params.get('price[min]');
            }

            if (params.get('price[max]') !== null) {
                this.priceRange[1] = params.get('price[max]');
            } else {
                this.priceRange[1] = this.max_price;
            }
        }
    },
    mixins: [methods],
}
</script>

<style>
@import "../../css/style.css";
</style>
