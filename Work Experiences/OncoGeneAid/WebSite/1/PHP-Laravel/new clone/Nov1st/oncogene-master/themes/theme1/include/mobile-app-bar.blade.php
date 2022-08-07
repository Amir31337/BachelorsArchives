<?php
if (class_exists(\Modules\cart\Models\Cart::class)) {
    $cartCount = \Modules\cart\Models\Cart::get_product_count();
} else {
    $cartCount = 0;
}
?>
<mobile-app-bar shop_name="{{ config('shop-info.shop_name') }}">

    <template v-slot:cat_list>
        @include('front-theme::views.mobile.catList')
    </template>

    <template v-slot:items>

        @if(class_exists(\Modules\cart\Models\Cart::class))
            <a href="{{ url('/Cart') }}" class="router-link">
                <v-badge
                    content="{{ $cartCount>0 ? replace_number($cartCount) : '' }}"
                    value="{{ $cartCount>0 ? replace_number($cartCount) : '' }}"
                    overlap dark
                    color="red"
                >
                    <v-icon>
                        mdi-cart-outline
                    </v-icon>
                </v-badge>
            </a>
        @endif
        <auth-menu login="<?php echo e(Auth::check() ? 'yes' : 'no'); ?>"
                   role_id="<?php echo e(Auth::check() ? Auth::user()->role_id : 0); ?>"
                   role="<?php echo e(Auth::check() ? Auth::user()->role : ''); ?>"
                   shop_name="<?php echo e(config('shop-info.shop_name')); ?>"
                   mobile="on"
        >
        <!--                             <v-list-item>
                                 <v-list-item-icon @click="$root.$emit('send_get_request','<?php echo e(url('user/profile/orders')); ?>')"><v-icon>mdi-basket</v-icon></v-list-item-icon>
                                 <v-list-item-title @click="$root.$emit('send_get_request','<?php echo e(url('user/profile/orders')); ?>')"> پیگیری سفارش</v-list-item-title>
                             </v-list-item>-->

        </auth-menu>

    </template>

</mobile-app-bar>
<!--<header-search class="mobile-theme"></header-search>-->
