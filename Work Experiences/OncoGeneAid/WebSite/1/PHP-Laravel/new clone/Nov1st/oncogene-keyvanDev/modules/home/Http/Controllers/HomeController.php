<?php

namespace Modules\home\Http\Controllers;

use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;

class HomeController extends FrontController
{
    public function home(Request $request)
    {
        return CView('home::'.$this->view . 'home',['request'=>$request]);

    }
}
