<?php

namespace Modules\shop;

use App\BaseModule;

class Module extends BaseModule
{
    public function search_product_relation($data){
        $data[]='firstProductPrice';
        return $data;
    }
}
