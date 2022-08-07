<?php

namespace Modules\productPriceChanges;

use App\BaseModule;
use Modules\productPriceChanges\Models\Changes;

class Module extends BaseModule
{
    public function product_price_variation_updated($model){
        new Changes($model);
    }
    public function product_price_variation_created($model){
        new Changes($model);
    }
    public function product_price_variation_restored($model){
        new Changes($model);
    }
    public function product_price_variation_deleted($model){
       new Changes($model,'deleted');
    }

    public function registerComponent(){
        $routeName=getRouteName();
        if($routeName=='shop_show_product'){
            return [
                'code1'=>'productPriceChanges',
                'path'=>'modules/productPriceChanges/components.js',
                'file'=>'./modules/productPriceChanges/resource/js/components.js',
            ];
        }
    }
}
