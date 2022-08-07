<?php

namespace Modules\pages;

use App\BaseModule;

class Module extends BaseModule
{
    public function registerCssFile($theme='all'){
        if(request()->is('page/*') || request()->is('page')){
            return [
                'pages_all'=>asset('modules/pages/front/css/all.css'),
            ];
        }
    }
}
