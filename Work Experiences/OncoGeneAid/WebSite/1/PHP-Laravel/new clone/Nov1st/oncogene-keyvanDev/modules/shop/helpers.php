<?php

function shop_product_url($product){
    return url('product/'.$product->product_url);
}

function shop_short_product_url($product){
    return url('product/'.$product->id);
}

function shop_product_url_theme(){
    return url('').'/product/:product_url';
}
function getDiscountValue($price1,$price2){
    $d=($price2/$price1)*100;
    $d=100-$d;
    $d=round($d);
    return $d;
}
