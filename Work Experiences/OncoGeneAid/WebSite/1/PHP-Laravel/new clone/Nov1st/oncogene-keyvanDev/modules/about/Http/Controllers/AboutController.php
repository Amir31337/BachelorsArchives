<?php


namespace Modules\about\Http\Controllers;


use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;


class AboutController  extends FrontController
{
    public function about(Request $request){

        return CView('about::'.$this->view . 'about',['request'=>$request]);
    }


}
