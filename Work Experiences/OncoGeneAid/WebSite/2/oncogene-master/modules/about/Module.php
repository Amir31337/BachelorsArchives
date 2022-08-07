<?php


namespace Modules\about;


use App\BaseModule;

class Module extends BaseModule
{
    public function registerCssFile($theme='all'){
        if(request()->is('about/*') || request()->is('about')){
            return [
                'about_all'=>asset('modules/about/front/css/all.css'),
            ];
        }
    }
}
