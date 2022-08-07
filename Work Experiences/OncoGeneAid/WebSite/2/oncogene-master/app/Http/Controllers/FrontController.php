<?php


namespace App\Http\Controllers;


use App\Lib\Mobile_Detect;
use Illuminate\Http\Request;
use View;
class FrontController extends Controller
{
    protected $view='';

    public function __construct(Request $request)
    {
        getCatList();
        $detect=new Mobile_Detect();
        if($detect->isMobile() || $detect->isTablet()){
            $this->view='mobile.';
        }
        if($request->route()){
            $routeName=$request->route()->getName();
            $routeName=str_replace('.','_',$routeName);
            if($routeName){
                run_action($routeName.'_action',[$request]);
            }
        }
        $value=str_replace('.','',$this->view);
        if (!defined('view_type')) {
            define('view_type', $value);
        }
    }
}
