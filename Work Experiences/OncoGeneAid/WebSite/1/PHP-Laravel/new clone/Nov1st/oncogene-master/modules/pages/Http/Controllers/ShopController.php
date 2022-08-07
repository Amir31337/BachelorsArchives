<?php


namespace Modules\pages\Http\Controllers;


use App\Http\Controllers\FrontController;
use Modules\pages\Repository\PageRepositoryInterface;

class ShopController extends FrontController
{
    protected $repository=null;
    public function __construct(PageRepositoryInterface $repository)
    {
        parent::__construct(request());
        $this->repository=$repository;
    }
    public function page($url){
        $page=$this->repository->findPage(['url'=>$url]);
        return view('pages::'.$this->view.'page',['page'=>$page]);
    }
}
