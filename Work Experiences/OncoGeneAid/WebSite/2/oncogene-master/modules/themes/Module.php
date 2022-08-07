<?php

namespace Modules\themes;

use App\BaseModule;

class Module extends BaseModule
{
    public function registerComponent($theme,$type){
        $routeName=getRouteName();
        if($routeName=='theme_widgets'){
            return [
                'code1'=>'themes',
                'path'=>'modules/themes/components.js',
                'file'=>'./modules/themes/resource/js/components.js'
            ];
        }
        else{
            return [
                'code1'=>'front-theme',
                'path'=>'modules/front-theme/components.js',
                'file'=>'./modules/themes/resource/js/front-components.js'
            ];
        }
    }


}
