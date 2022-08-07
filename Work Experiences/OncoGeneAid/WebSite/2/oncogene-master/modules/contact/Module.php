<?php


namespace Modules\contact;

use App\BaseModule;

class Module extends BaseModule
{
    public function registerCssFile($theme='all'){
        if(request()->is('contact/*') || request()->is('contact')){
            return [
                'contact_all'=>asset('modules/contact/front/css/all.css'),
            ];
        }
    }
}
