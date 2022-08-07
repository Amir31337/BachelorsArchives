<?php

namespace Modules\contact\Http\Controllers;

use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;

class ContactController extends FrontController
{
   public function contact(Request $request){
       return CView('contact::'.$this->view . 'contact',['request'=>$request]);
   }
}
