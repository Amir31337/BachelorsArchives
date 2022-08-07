<?php


namespace Modules\home;

use App\BaseModule;

class Module extends BaseModule
{
    public function registerCssFile($theme='all'){
        if(request()->is('home/*') || request()->is('home')){
            return [
                'home_all'=>asset('modules/home/front/css/all.css'),
            ];
        }
    }
    public function registerJsFile($theme = 'all')
    {
        $routeName = getRouteName();
        if ($routeName == "") {
            return [
                'home_js' => asset('modules/home/front/js/all.js'),
            ];
        }
    }
}
