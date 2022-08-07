<?php


namespace Modules\faq;


use App\BaseModule;

class Module extends BaseModule
{
    public function registerComponent(){
        if(request()->is('faq/*') ||request()->is('faq')){
            return [
                'code1'=>'faq',
                'code2'=>'',
                'path'=>'modules/faq/components.js',
                'file'=>'./modules/faq/resource/js/components.js',
            ];
        }
    }
}
