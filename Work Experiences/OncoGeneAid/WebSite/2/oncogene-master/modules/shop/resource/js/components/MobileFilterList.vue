<template>
    <div>

        <slot name="product-list" v-if="hasFilter===false"></slot>

        <template v-if="products.data.length>=0 &&  clientRequest===true">

            <template v-for="p in products.data">
                <slot name="layout" :product="p"></slot>
            </template>

            <div v-if="products.data.length===0 && hasFilter" class="not_fount_product_message">
                محصولی برای نمایش یافت نشد
            </div>

        </template>

        <template v-if="sendProductRequest===true">

            <div v-for="i in 2" class="product_div"  style="padding:15px">
                <div class="product_info_div">
                    <div class="image_box">
                        <v-skeleton-loader
                            type="image"
                            height="120"
                        ></v-skeleton-loader>
                    </div>
                    <div class="product-info">
                        <v-skeleton-loader
                            type="list-item-two-line"
                        ></v-skeleton-loader>
                    </div>
                </div>
            </div>

        </template>
    </div>
</template>

<script>
    import methods from "../methods";

    export default {
        name: "MobileFilterList",
        data(){
            return {
                drawer:false,
                sortDrawer:false,
                filterList:{},
                boxStatus:{
                    'brand':true,
                },
                checkbox:{},
                search_url:'',
                searchText:{},
                sendRequest:true,
                sort:21,
                products:{data:[]},
                sendProductRequest:false,
                has_product:false,
                has_ready_to_shipment:false,
                searchTextString:'',
                priceRange:[0,4],
                min:0,
                max:100,
                clientRequest:false,
                mobileApp:true,
                getServerData:'ok',
                page:1,
                hasFilter:false
            }
        },
        props:['cat_id','max_price','cat_name'],
        mounted() {
            this.getFilterList();
            this.scroll();
        },
        mixins:[methods],
        methods:{
            scroll () {
                const self=this;
                window.onscroll = () => {
                    let bottomOfWindow = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop) + window.innerHeight === document.documentElement.offsetHeight

                    if (bottomOfWindow && self.getServerData==='ok' && this.sendProductRequest===false) {
                        this.page=this.page+1;
                        this.add_url_param('page',this.page);
                        this.setPageUrl(this.search_url,true);
                        this.search_url='';
                    }
                }
            }
        }
    }
</script>

