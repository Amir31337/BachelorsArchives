<?php


namespace Modules\priceVariation\Http\Controllers;


use Illuminate\Http\Request;
use Modules\priceVariation\Repository\PriceVariationRepositoryInterface;
use Modules\products\Repository\ProductRepositoryInterface;

class ShopController
{
    public function change_product_variation(Request $request,PriceVariationRepositoryInterface $repository,ProductRepositoryInterface $productRepository){
        $product_id=$request->get('product_id');
        $product=$productRepository->findWithWhere(['id'=>$product_id],['PriceVariation']);
        $param1=$request->get('param1');
        $param2=$request->get('param2');
        $change_num=$request->get('change_num');
        if($product){
            $price_variation=$repository->setVariation($param1,$param2,$product_id);
            $data=['product'=>$product];
            if($price_variation){
                $data['price_variation']=$price_variation;
            }
            else{
                $p1=($change_num==="1") ? $param1 : null;
                $p2=($change_num==="2") ? $param2 : null;
                $price_variation=$repository->setVariation($p1,$p2,$product_id);
                if($price_variation){
                    $data['price_variation']=$price_variation;
                }
            }
            $paramsView=view('priceVariation::product.params-view',$data)->render();
            $detailView=view('priceVariation::product.detail-view',$data)->render();
            return  [
                'paramsView'=>$paramsView,
                'detailView'=>$detailView
            ];
        }
        else{
            return  [];
        }
    }

}

